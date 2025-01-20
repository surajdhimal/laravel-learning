<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $guarded = [];
    
    public function contributors(){
        return $this->morphMany(Contributor::class, 'contributor');
    }
}
