@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register/Unregister Courses</div>

                <div class="card-body">
                    @if(!empty($courses))
                    	<form action="{{url('course/register/save')}}" method="post">
                    		 @csrf
	                        <div class="table-responsive">
	                            <table class="table table-striped">
	                                <thead>
	                                    <th>Course Title</th>
	                                    <th>Course Description</th>
	                                    <th>Credit Unit</th>
	                                    <th>Select/Deselect</th>
	                                </thead>
	                                @foreach($courses as $course)
	                                    <tr>
	                                        <td>{{$course->course_title}}</td>
	                                        <td>{{$course->description}}</td>
	                                        <td>{{$course->credit_unit}}</td>
	                                        <td>
	                                        	
	                                        	@if(in_array($course->id, $registeredCourses))
	                                        		<input type="checkbox" value="{{$course->id}}" name="course[]" checked="checked">
	                                        	@else
	                                        		<input type="checkbox" value="{{$course->id}}" name="course[]">
	                                        	@endif
	                                        </td>
	                                    </tr>

	                                @endforeach
	                            </table>
	                            <div class="form-group">
		                            <div class="col-md-6">
		                                <button type="submit" class="btn btn-primary">
		                                    {{ __('Register') }}
		                                </button>
		                            </div>
		                        </div>
	                        </div>
	                       </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection