<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'status_id', 'surname', 'name', 'patronymic', 'phone',
        'email', 'date', 'note', 'promocode', 'discount', 'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function status()
    {
        return $this->hasOne(OrderStatus::class, 'id', 'status_id');
    }

    public static function add($fields, $user)
    {
        $defaultStatus = OrderStatus::where('title', 'in_processing')->first()->id;
        $promocode = Promocode::where('code', $fields['promocode_applied'])->first();

        $order = new static;
        $order->fill($fields);
        $order->user_id = $user->id;
        $order->status_id = $defaultStatus;
        $order->date = date('Y-m-d');

        if ($promocode && $promocode->isValid()) {
            $order->promocode = $promocode->code;
            $order->discount = $promocode->discount;
        }

        $order->save();

        return $order;
    }

    public function updateDiscount($promo)
    {
        if ($promo && $promo->isValid()) {
            $this->update([
                'promocode' => $promo->code,
                'discount' => $promo->discount,
            ]);
        } else {
            $this->update([
                'promocode' => null,
                'discount' => null
            ]);
        }
    }

    public static function addForExistsCustomer($fields, $user)
    {
        $order = new static;
        $order->fill($fields);
        $order->user_id = $user->id;
        $order->name = $user->name;
        $order->surname = $user->surname;
        $order->patronymic = $user->patronymic;
        $order->phone = $user->phone;
        $order->email = $user->email;
        $order->passport = $user->passport;

        if ($user->country) {
            $order->country_id = $user->country->id;
        }
        $order->state = $user->state;
        $order->city = $user->city;
        $order->address = $user->address;
        $order->zip = $user->zip;
        $order->date = date('Y-m-d');
        if ($user->company) {
            $order->company = $user->company->name;
            $order->itn = $user->company->itn;
        }
        $order->save();

        return $order;
    }

    public function remove()
    {
        $this->delete();
    }

    public function getFullName() : string
    {
        return $this->surname . ' ' . $this->name . ' ' . $this->patronymic;
    }

    public function getPaymentCost() : int
    {
        $payment = 0;
        foreach ($this->details as $detail) {
            $payment += $detail->total;
        }
        return $payment;
    }

    public function getCustomer() : string
    {
        if ($this->company) {
            return $this->company;
        }
        return $this->getFullName();
    }

    public function getShippingAddress() : string
    {
        $fullAddress = array();

        if ($this->zip) { $fullAddress[] = $this->zip; }
        if ($this->country_id) { $fullAddress[] = __("countries.".$this->country->code); }
        if ($this->state) { $fullAddress[] = $this->state; }
        if ($this->city) { $fullAddress[] = $this->city; }
        if ($this->address) { $fullAddress[] = $this->address; }

        return implode(', ', $fullAddress);
    }

    public function getStatusLabel($value) : string
    {
        if (in_array($value, ['on_holding', 'canceled', 'returned', 'awaiting_payment'])) {
            return 'danger';
        }
        if (in_array($value, ['new', 'in_processing'])) {
            return 'info';
        }
        return 'success';
    }

    public function getDateAttribute($value) : string
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
    }

    public function getTotalPrice() : string
    {
        $total = 0;
        foreach ($this->details as $detail) {
            $total += $detail->price * $detail->quantity;
        }
        return number_format($total, 0, '.', ' ') . ' ₽';
    }

    /* Payment Results */
    public function getCurrentPayment()
    {
        return Payment::where('order_id', $this->id)->latest()->first();
    }

    public function getPaymentType()
    {
        return $this->payments()->latest()->first()->type;
    }

    public function isPaid() : bool
    {
        $paid = $this->payments()->latest()->first()->paid;

        if ($paid) {
            return true;
        }
        return false;
    }
}
