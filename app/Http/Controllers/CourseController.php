<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\StudentCourses;
use Auth;

class CourseController extends Controller
{
    //
 	protected function validator(array $data)
    {
        return Validator::make($data, [
            'courseTitle' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string',  'max:255'],
            'creditUnit' => ['required'],
            'className' => ['required'],
        ]);
    }

    public function getAddForm(){
    	return view('addCourseForm');
    }

    public function add(Request $request){
    	Course::create([
            'course_title' => $request->courseTitle,
            'description' =>  $request->description,
            'credit_unit' => $request->creditUnit,
            'class' => $request->className,
        ]);
        $message = "Course added successfully";
        return view('home', compact('message'));
    }

    public function register(){
        $registeredCourses = array();
    	$courses = Course::where('class', Auth::user()->class)->get();
        $myCourses = StudentCourses::where('student_id', Auth::user()->id)->get();
        foreach ($myCourses as $value) {
            array_push($registeredCourses, $value->course_id);
        }
    	return view('register_course', compact('courses','registeredCourses'));
    }

    public function getStudentCourses($id){
    	$registeredCourses = StudentCourses::where('student_id', $id)->with('courses')->get();
    	return view('student_courses', compact('registeredCourses'));
    }

    public function index(){
    	$courses = Course::all();
        return view('course_list', compact('courses'));
    }

    public function saveRegisteredCourses(Request $request){
       // dd($request);
        $recExist = StudentCourses::where('student_id', Auth::user()->id)->get();
        foreach ($recExist as $value) {
            $value->delete();
        }
       $i = 0;
       while(isset($request->course[$i])){
            StudentCourses::create([
                'student_id' => Auth::user()->id,
                'course_id' => $request->course[$i],
            ]);
            $i++;
        }
        return redirect()->to('/home');
    }
}
