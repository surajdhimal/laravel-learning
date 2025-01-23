<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function threads(){
        return $this->hasMany(Thread::class, "user_id", "id");
    }

    // protected static function booted() : void
    // {
    //     static::deleted(function($account){
    //         $account->threads()->delete();
    //     });
    //     static::created(function($account){
            
    //     });
    //     static::updated(function($account){
            
    //     });
    // }
}
