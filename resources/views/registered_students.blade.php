@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of Students and Registered Courses</div>

                <div class="card-body">
                    @if(!is_null($registeredStudents))
                        @foreach($registeredStudents as $student)
                            <div class="table-responsive">
                                <div class="badge primary">{{$student->name}}</div>
                                @if(!is_null($student->studentCourses))  
                                    <table class="table-striped" cellpadding="10"> 
                                    <thead>
                                        <th>Course Title</th>
                                        <th>Course Description</th>
                                        <th>Credit Unit</th>
                                    </thead>                         
                                    @foreach($student->studentCourses as $course)
                                        <?php
                                            $thisCourse = App\Course::where('id', $course->course_id)->first();
                                        ?>
                                        <tr>
                                            <td> {{$thisCourse->course_title}}</td>
                                            <td> {{$thisCourse->description}}</td>
                                            <td> {{$thisCourse->credit_unit}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                                @endif
                                
                            </div>
                        @endforeach
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
