<?php

declare(strict_types=1);

namespace App\Actions\Fortify;

use App\Kafka\Exception\ProducerSendException;
use App\Kafka\Exception\TopicNotFoundException;
use App\Kafka\Producer\BaseProducer;
use App\Models\Captcha;
use App\Models\Setting;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Spatie\Permission\Models\Role;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    protected array $availableEmailDomains = [
        'gmail.com',
        'ya.ru',
        'yandex.ru',
        'mail.ru',
        'list.ru',
        'icloud.com',
    ];

    public function __construct(
        private readonly BaseProducer $producer
    ) {
    }

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return User
     * @throws ValidationException
     * @throws TopicNotFoundException
     * @throws ProducerSendException
     * @throws Exception
     */
    public function create(array $input): User
    {
        $this->validateInput($input);

        return DB::transaction(function () use ($input) {
            $roleName = $input['user_type'] === 'student' ? 'user' : 'teacher';
            $role = Role::where('name', $roleName)->firstOrFail();

            $user = User::withTrashed()->where('email', $input['email'])->first();

            if ($user) {
                if ($user->trashed()) {
                    $user->restore();
                }

                $user->update([
                    'name' => $input['name'],
                    'surname' => $input['surname'],
                    'password' => Hash::make($input['password']),
                    'role_id' => $role->id,
                    'email_verified_at' => null,
                ]);

                $user->syncRoles([$role]);
            } else {
                $user = User::create([
                    'name' => $input['name'],
                    'surname' => $input['surname'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                    'role_id' => $role->id,
                ]);

                $user->roles()->attach($role);
            }

            Setting::firstOrCreate(
                ['user_id' => $user->id],
                ['locale' => 'ru']
            );

            return $user;
        });
    }

    /**
     * @throws ValidationException
     */
    private function validateInput(array $input): void
    {
        $validator = Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class)->whereNull('deleted_at'),
            ],
            'password' => $this->passwordRules(),
            'agreement' => ['accepted'],
            'user_type' => ['required', 'in:student,teacher']
        ])->validate();
    }

    private function validateCaptcha(array $input, $validator): void
    {
        $code = $input['user_text'] ?? '';
        $expected = $input['user_type'] === 'student'
            ? Captcha::find($input['user_text_x'])->code ?? null
            : Captcha::where('code', $code)->value('code');

        if ($code !== $expected) {
            $validator->errors()->add('user_text', 'Код с картинки введен не верно.');
        }
    }

    private function validateEmailDomain(string $email, $validator): void
    {
        $domain = substr(strrchr($email, "@"), 1);

        if (!in_array($domain, $this->availableEmailDomains)) {
            $validator->errors()->add(
                'email',
                'Email, с которого вы пытаетесь зарегистрироваться, запрещен системой.'
            );
        }
    }
}
