<?php

namespace Modules\Dashboard\app\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Dashboard\Database\factories\OrderFactory;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class, 'coupon_id', 'id');
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }

    public function coupon(){
        return $this->belongsTo(Coupon::class, 'coupon_id', 'id');
    }

    public static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $number = Order::max('id') + 1;
            $model->reference = make_reference_id('SL', $number);
        });
    }

    // protected static function newFactory(): OrderFactory
    // {
    //     //return OrderFactory::new();
    // }
}
