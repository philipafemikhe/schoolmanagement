<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourses extends Model
{
    //
    protected $table = 'student_courses';

    protected $fillable = ['student_id', 'course_id'];

     public function user(){
         return $this->belongsTo('App\User');
    }

    public function courses(){
         return $this->belongsTo('App\Course', 'course_id', 'id');
    }
}
