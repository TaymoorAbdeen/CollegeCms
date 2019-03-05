<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $guarded = [];
    //
    public function teachers(){
       return $this->belongsTo(Teacher::class);
    }
    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}
