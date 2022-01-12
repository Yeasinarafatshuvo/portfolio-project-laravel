@extends('backend.dashboard')
@section('admin.content')
    <div class="container-fluid">
        <div class="row justify-content-center pt-5">
            <div class="col-md-6 ">
                <form action="{{ route('about.update',$specefic_about_data->id ) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="" class="bg-primary d-block fs-2 mb-2">Update your Description</label>
                        <textarea name="about_me" id="about_me"  class="form-control" style="height: 150px">{{ $specefic_about_data->about_me }}</textarea>
                        <span class="text-danger">
                            @error('about_me')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <br>
                    <button class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection