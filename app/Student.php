<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['name','password','email','profile_picture','college_id','department_id',
                          'stage','birthdate','bio','gender'];
                          
}
