<?php

namespace Modules\Dashboard\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Dashboard\Database\factories\PostCategoryFactory;

class PostCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function posts(){
        return $this->hasMany(Post::class, 'category_id', 'id');
    }

    // protected static function newFactory(): PostCategoryFactory
    // {
    //     //return PostCategoryFactory::new();
    // }
}
