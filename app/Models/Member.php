<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Scopes\MemberScope;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;

#[ScopedBy([MemberScope::class])]
class Member extends Model
{
    // protected static function booted(): void
    // {
    //     // static::addGlobalScope("userdetail", function(Builder $builder){
    //     //     $builder->where("status", 1);
    //     // });

    //     static::addGlobalScope(new MemberScope);
    // }

    public function posts(){
        return $this->hasmany(Post::class, "user_id");
    }
    
    public function scopeActive($query){
        return $query->where("status", 1);
    }

    public function scopeCity($query, $cityName){
        return $query->where("city", $cityName);
        // return $query->whereIn("city", $cityName);
    }

    public function scopeSort($query){
        return $query->orderBy("name", "asc");
    }
}
