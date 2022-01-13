@extends('backend.dashboard')
@section('admin.content')
    <div class="container-fluid">
        <div class="row justify-content-center pt-5">
            <div class="col-md-12 ">
                <h1 class="bg-primary">Add your Education Details </h1>
                <form action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter Organization Name</label>
                                <input id="edu_organization" type="text" class="form-control" name="edu_organization">
                                <span class="text-danger">
                                    @error('edu_organization')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter Education Level</label>
                                <input id="edu_level" type="text" class="form-control" name="edu_level">
                                <span class="text-danger">
                                    @error('edu_level')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter Passing Year</label>
                                <input id="passing_year" type="text" class="form-control" name="passing_year">
                                <span class="text-danger">
                                    @error('passing_year')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter Your Result</label>
                                <input id="result" type="text"  class="form-control" name="result">
                                <span class="text-danger">
                                    @error('result')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                                     
                    <br>
                    <button class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection