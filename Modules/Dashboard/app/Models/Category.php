<?php

namespace Modules\Dashboard\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Dashboard\Database\factories\CategoryFactory;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function scopeIsParent(Builder $query)
    {
        return $query->where('is_parent', 1);
    }

    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function child(){
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    // protected static function newFactory(): CategoryFactory
    // {
    //     //return CategoryFactory::new();
    // }
}
