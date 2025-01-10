<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profiles";

    // protected $guarded = [];
    protected $fillable = [
        'name', 'email', 'age', 'city', 'password',  // Add 'password' here
    ];
}
