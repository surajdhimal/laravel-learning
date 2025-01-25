<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    public function members(){
        return $this->belongsTo(Member::class, "user_id");
    }
}
