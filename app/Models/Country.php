<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    public function clients(){
        return $this->hasMany(Client::class, 'country_id', 'id');
    }
    public function blogs(){
        return $this->hasManyThrough(Blog::class, Client::class, 'country_id', 'user_id', 'id', 'id');
    }
}
