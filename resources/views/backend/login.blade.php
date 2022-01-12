@extends('backend.layout.app')

@section('content')
    <body class="bg-success p-2 text-dark bg-opacity-50 ">
        <div class="container offset-md-4 mt-5">
            <h1>Admin Login</h1>
            <div class="row " >
                <div class="col-md-4  bg-success bg-opacity-25">
                    <form action="{{ route('login.check') }}" method="POST">
                        @if (Session::get('fail'))
                            <div class=" text-danger">
                                {{ Session::get('fail') }}
                            </div>
                         @endif
                        @csrf
                        <div class="form-group">
                            <label for="" class="fs-4">Enter Your Mail</label>
                            <input id="user_email" type="text" class="form-control" name="user_email">
                            <span class="text-danger">
                                @error('user_email')
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
                        <a href="" class="float-end text-decoration-none">I don't have an account!</a><br>
                        <button class="btn btn-primary mb-1">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
   
@endsection