<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
    protected $with = ["explorers"];
    
    public function explorers(){
        return $this->belongsTo(Explorer::class, "user_id")->select(["name","email","id"]);
    }
}
