<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Explorer extends Model
{

    public function voices(){
        return $this->hasMany(Voice::class, "user_id")->select(["title","description","user_id"]);
    }
}
