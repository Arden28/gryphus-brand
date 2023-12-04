<?php

namespace Modules\Dashboard\app\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Dashboard\Database\factories\PostFactory;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(PostCategory::class, 'post_cat_id', 'id');
    }

    public function tags(){
        return $this->belongsToMany(PostTag::class, 'post_tag_id', 'id');
    }

    public function author(){
        return $this->belongsTo(User::class, 'added_by', 'id');
    }

    // protected static function newFactory(): PostFactory
    // {
    //     //return PostFactory::new();
    // }
}
