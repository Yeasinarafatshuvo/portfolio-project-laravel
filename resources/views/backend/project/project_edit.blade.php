@extends('backend.dashboard')
@section('admin.content')
    <div class="container-fluid">
        <div class="row justify-content-center pt-5">
            <div class="col-md-12 ">
                <h1 class="bg-primary">Edit your Project </h1>
                <form action="{{ route('project.update', $find_specefic_data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter Your Project Name</label>
                                <input id="project_name" type="text" class="form-control" name="project_name" value="{{ $find_specefic_data->project_name }}">
                                <span class="text-danger">
                                    @error('project_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter Your Project Url</label>
                                <input id="project_url" type="text" class="form-control" name="project_url" value="{{ $find_specefic_data->project_url }}">
                                <span class="text-danger">
                                    @error('project_url')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="">Enter Your Project Url</label>
                                <input id="project_photo" type="file" class="form-control" name="project_photo">
                                <span class="text-danger">
                                    @error('project_photo')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                                                                    
                    </div>
                    <br>
                    <button class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection