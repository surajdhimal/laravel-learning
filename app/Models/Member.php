<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Member extends Model
{
    protected $guarded = [];
    public function posts(){
        return $this->hasMany(Post::class, 'user_id');
    }
}
