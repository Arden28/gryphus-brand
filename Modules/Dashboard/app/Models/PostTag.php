<?php

namespace Modules\Dashboard\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Dashboard\Database\factories\PostTagFactory;

class PostTag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function posts(){
        return $this->hasMany(Post::class, 'post_tag_id', 'id');
    }

    // protected static function newFactory(): PostTagFactory
    // {
    //     //return PostTagFactory::new();
    // }
}
