@extends('backend.dashboard')
@section('admin.content')
    <div class="container-fluid">
        <div class="row justify-content-center pt-5">
            <div class="col-md-12 ">
                <h1 class="bg-primary">Make your Banners </h1>
                <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Add your skill</label>
                                <input id="skills" type="text" class="form-control" name="skills">
                                <span class="text-danger">
                                    @error('skills')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Add your Area</label>
                                <input id="area" type="text" class="form-control" name="area">
                                <span class="text-danger">
                                    @error('area')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">upload your Cover photo</label>
                                <input id="cover_photos" type="file" class="form-control" name="cover_photos">
                                <span class="text-danger">
                                    @error('cover_photos')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            
                        </div>
                            
                        
                    </div>
                    <br>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection