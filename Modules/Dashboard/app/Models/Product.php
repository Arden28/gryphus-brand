<?php

namespace Modules\Dashboard\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Dashboard\Database\factories\ProductFactory;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function scopeIsTrend(Builder $query)
    {
        return $query->where('condition', 'hot');
    }

    public function scopeIsShoes(Builder $query)
    {
        return $query->where('category_name', 'chaussures');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function reviews(){
        return $this->hasMany(ProductReview::class, 'product_id', 'id');
    }


    // protected static function newFactory(): ProductFactory
    // {
    //     //return ProductFactory::new();
    // }
}
