@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of Registered Courses</div>

                <div class="card-body">
                    @if(!is_null($registeredCourses))
                        <div class="table-responsive">
                            <table class="table-striped" cellpadding="10"> 
                                <thead>
                                    <th>Course Title</th>
                                    <th>Course Description</th>
                                    <th>Credit Unit</th>
                                </thead>                           
                                @foreach($registeredCourses as $course)
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
                        </div>
                    @else
                        Empty list
                   @endif

                    @if(count($registeredCourses) ==0)
                        Empty list
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
