<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'age', 'city'];

    protected $table = "my_table";
    protected $primaryKey = "student_id";

    public $timestamps = false;
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';

    protected $attributes = [
        'city' => 'Dharan'
    ];
}
