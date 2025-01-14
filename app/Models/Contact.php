<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Use $guarded to define the attributes that cannot be mass assigned
    protected $guarded = [];
    public $timestamps = false;

    public function students(){
        return $this->belongsTo(Student::class);
    }
}
