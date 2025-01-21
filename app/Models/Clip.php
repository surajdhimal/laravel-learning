<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clip extends Model
{
    protected $guarded = [];
    
    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
