@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    @if(Auth::user()->user_type == 'admin')
                        <h1>Welcome Admin</h1>
                        <div class="links">
                            <a href="{{url('/course/add')}}">Create a Course</a><br/>
                            <a href="{{url('/course/view')}}">View Courses</a><br/>
                            <a href="{{url('/registration/view')}}">View Students' Course Registration</a>
                        </div>
                    @else
                        <h1>Welcome Student</h1>
                        <div class="links">
                            <a href="{{url('/course/register')}}">Register/Unregister Courses</a><br/>
                            <a href="{{url('/course/view/student',['id'=>Auth::user()->id])}}">View My Courses</a><br/>
                            <a href="{{url('/profile/view')}}">View Profile</a>
                        </div>

                    @endif

                    @if(isset($message))
                        <p style="color:#f00; margin-top: 2em">{{$message}}</p> 
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
