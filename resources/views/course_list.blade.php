@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Available Courses</div>

                <div class="card-body">
                    @if(!empty($courses))
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <th>Course Title</th>
                                    <th>Course Description</th>
                                    <th>Credit Unit</th>
                                    <th>Class offered</th>
                                </thead>
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{$course->course_title}}</td>
                                        <td>{{$course->description}}</td>
                                        <td>{{$course->credit_unit}}</td>
                                        <td>{{$course->class}}</td>
                                    </tr>

                                @endforeach
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
