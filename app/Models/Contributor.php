<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    protected $guarded = [];
    
    public function contributor(){
        return $this->morphTo(__FUNCTION__, 'contributor_type', 'contributor_id');
    }
}
