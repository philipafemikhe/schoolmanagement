@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Course') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/course/add') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="courseTitle" class="col-md-4 col-form-label text-md-right">{{ __('Course Title') }}</label>

                            <div class="col-md-6">
                                <input id="courseTitle" type="text" class="form-control @error('courseTitle') is-invalid @enderror" name="courseTitle" value="{{ old('courseTitle') }}" required autocomplete="courseTitle" autofocus>

                                @error('courseTitle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description"  name="description" rows="4" class="form-control"></textarea> 

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="creditUnit" class="col-md-4 col-form-label text-md-right">{{ __('Credit Unit') }}</label>

                            <div class="col-md-6">
                                <input id="creditUnit" type="text" class="form-control @error('creditUnit') is-invalid @enderror" name="creditUnit" required>

                                @error('creditUnit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      
                         <div class="form-group row">
                            <label for="className" class="col-md-4 col-form-label text-md-right">{{ __('Class') }}</label>

                            <div class="col-md-6">
                                <select id="className" class="form-control" name="className" required>
                                    <option value="null">Select one</option>
                                    <option value="100 Level">100 Level</option>
                                    <option value="200 Level">200 Level</option>
                                    <option value="300 Level">300 Level</option>
                                    <option value="400 Level">400 Level</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Course') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection