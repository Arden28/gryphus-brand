<?php

namespace Modules\Dashboard\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Dashboard\Database\factories\OrderDetailFactory;

class OrderDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function order(){
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    // protected static function newFactory(): OrderDetailFactory
    // {
    //     //return OrderDetailFactory::new();
    // }
}
