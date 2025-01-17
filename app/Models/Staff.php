<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';

    public function companys(){
        return $this->hasOne(Company::class, 'user_id', 'id');
    }

    public function phoneNumbers(){
        return $this->hasOneThrough(Phone_number::class, Company::class, 'user_id', 'company_id', 'id', 'id');
    }
}
