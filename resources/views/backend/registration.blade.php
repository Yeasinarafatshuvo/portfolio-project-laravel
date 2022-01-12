@extends('backend.layout.app')

@section('content')
   
        <div class="container offset-md-4 mt-5">
            <h1>Admin Registration</h1>
            <div class="row">
                <div class="col-md-4   bg-success bg-opacity-25">
                    <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">
                        @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif

                        @csrf
                        <div class="form-group">
                            <label for="" class="fs-4">Enter Your Name</label>
                            <input type="text" id="user_name" class="form-control" name="user_name">
                            <span class="text-danger">
                                @error('user_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="" class="fs-4">Enter Your Email</label>
                            <input id="user_email" type="text" class="form-control" name="user_email">
                            <span class="text-danger">
                                @error('user_email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="" class="fs-4">Enter Your Phone Number</label>
                            <input id="user_phone" type="text" class="form-control" name="user_phone">
                            <span class="text-danger">
                                @error('user_phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="" class="fs-4">upload your photo</label>
                            <input id="user_photo" type="file" class="form-control" name="user_photo">
                            <span class="text-danger">
                                @error('user_photo')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="" class="fs-4">Enter Your Password</label>
                            <input id="user_password" type="password" class="form-control" name="user_password">
                            <span class="text-danger">
                                @error('user_password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <a href="" class="float-end text-decoration-none">I already have an account!</a><br>
                        <button class="btn btn-primary mb-1">Register</button>
                    </form>
                </div>
            </div>
        </div>
   
   
@endsection