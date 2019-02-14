<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $guarded = [];
    public function lectures(){
       return $this->hasMany(Lecture::class);
    }
}
