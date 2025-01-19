<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = [];
    protected $table = 'status';

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
