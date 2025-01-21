<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];
    
    public function updates(){
        return $this->morphedByMany(Update::class, 'taggable');
    }

    public function clips(){
        return $this->morphedByMany(Clip::class, 'taggable');
    }
}
