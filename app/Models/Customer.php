<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function orders(){
        return $this->hasMany(Order::class, 'customer_id', 'id');
    }

    public function latestOrder(){
        return $this->hasOne(Order::class, 'customer_id', 'id')->latestOfMany();
    }

    public function oldestOrder(){
        return $this->hasOne(Order::class, 'customer_id', 'id')->oldestOfMany();
    }

    public function largestOrder(){
        return $this->hasOne(Order::class, 'customer_id', 'id')->ofMany('amount', 'max');
    }

    public function smallestOrder(){
        return $this->hasOne(Order::class, 'customer_id', 'id')->ofMany('amount', 'min');
    }
}
