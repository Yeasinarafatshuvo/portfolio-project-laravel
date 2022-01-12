@extends('backend.dashboard')
@section('admin.content')
    <div class="container-fluid">
        <div class="row justify-content-center pt-5">
            <div class="col-md-12 ">
                <h1 class="bg-primary">Enter your skills</h1>
                <form action="{{ route('skill.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter Front Skill</label>
                                <input id="front_skill" type="text" class="form-control" name="front_skill">
                                <span class="text-danger">
                                    @error('front_skill')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Enter Front skill value</label>
                                <input id="font_value" type="text" class="form-control" name="font_value">
                                <span class="text-danger">
                                    @error('font_value')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter Backend Skill</label>
                                <input id="back_skill" type="text" class="form-control" name="back_skill">
                                <span class="text-danger">
                                    @error('back_skill')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Enter Backend skill value</label>
                                <input id="back_value" type="text" class="form-control" name="back_value">
                                <span class="text-danger">
                                    @error('back_value')
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