<?php

namespace App\Http\Controllers;

use App\Models\LMS\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function infoUpdate(Request $request)
    {
        $user = Auth::user();

        if(strcmp(strtolower($user->email), strtolower($request->email)) !== 0){
            $request->validate([
                'name' => 'required|string|max:50',
                'surname' => 'required|string|max:50',
                'email' => 'required|unique:users|max:50',
            ]);
        } else {
            $request->validate([
                'name' => 'required|string|max:50',
                'surname' => 'required|string|max:50',
            ]);
        }

        $user->fill($request->all())->save();

        return back();
    }

    public function passwordUpdate(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8',
        ]);

        $validator->after(function ($validator) use ($user, $request) {
            if (! Hash::check($request->current_password, $user->password)) {
                $validator->errors()->add('current_password', __("Current Password is wrong!"));
            }

            if ($request->password != $request->password_confirmation) {
                $validator->errors()->add('password_confirmation', __("Passwords do not match!"));
            }
        });

        if (!$validator->errors()->any()) {
            $user->password = Hash::make($request->password);
            $user->save();
        }
        return back()->withErrors($validator);
    }

    /* Block User */
    public function banSwitcher(User $user)
    {
        $courses = Course::where('author_id', $user->id)->get();

        if ($user->is_active) {
            $user->update(['is_active' => 0]);

            foreach ($courses as $course) {
                $course->update(['is_allowed' => 0]);
            }

        } else {
            $user->update(['is_active' => 1]);
        }

        return back();
    }

    public function adminUsersList()
    {
        $admins = User::role(['admin', 'superuser'])->get();
        $adminKeys = array();

        foreach ($admins as $admin) {
            $adminKeys[] = $admin->id;
        }

        return view('cms.users.index', [
            'users' => User::all()->except($adminKeys),
        ]);
    }

    public function adminUserShow(User $user)
    {
        return view('cms.users.index', [
            'user' => $user
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }

    public function giveTeacherRole(User $user)
    {
        $teacher = Role::where('name', 'teacher')->get();
        $user->assignRole($teacher);

        return redirect()->back();
    }
}
