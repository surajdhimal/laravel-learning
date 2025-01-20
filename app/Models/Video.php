<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function contributors(){
        return $this->morphMany(Contributor::class, 'contributor');
    }

    public function latestComment(){
        return $this->morphOne(Contributor::class, 'contributor')->latestOfMany();
    }

    public function oldestComment(){
        return $this->morphOne(Contributor::class, 'contributor')->oldestOfMany();
    }

    public function BestComment(){
        return $this->morphOne(Contributor::class, 'contributor')->ofMany('likes', 'max');
    }
    public function leastComment(){
        return $this->morphOne(Contributor::class, 'contributor')->ofMany('likes', 'min');
    }
}
