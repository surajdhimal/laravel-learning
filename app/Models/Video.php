<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function contributors(){
        return $this->morphMany(Contributor::class, 'contributor');
    }
}
