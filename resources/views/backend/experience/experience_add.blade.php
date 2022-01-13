@extends('backend.dashboard')
@section('admin.content')
    <div class="container-fluid">
        <div class="row justify-content-center pt-5">
            <div class="col-md-12 ">
                <h1 class="bg-primary">Add your Experience Details </h1>
                <form action="{{ route('experience.store') }}" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter Organization Name</label>
                                <input id="organization" type="text" class="form-control" name="organization">
                                <span class="text-danger">
                                    @error('organization')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter Position</label>
                                <input id="position" type="text" class="form-control" name="position">
                                <span class="text-danger">
                                    @error('position')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter Time</label>
                                <input id="time" type="text" class="form-control" name="time">
                                <span class="text-danger">
                                    @error('time')
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