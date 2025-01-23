<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guarded = [];
    
    public function accounts(){
        return $this->belongsTo(Account::class, "user_id", "id");
    }
}
