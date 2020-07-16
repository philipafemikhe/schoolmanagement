<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
     protected $table = 'courses';

    protected $fillable = ['course_title', 'description', 'credit_unit', 'class'];

    


}
