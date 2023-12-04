<?php

namespace Modules\Dashboard\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Dashboard\Database\factories\CouponFactory;

class Coupon extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function orders(){
        return $this->hasMany(Order::class, 'coupon_id', 'id');
    }


    // protected static function newFactory(): CouponFactory
    // {
    //     //return CouponFactory::new();
    // }
}
