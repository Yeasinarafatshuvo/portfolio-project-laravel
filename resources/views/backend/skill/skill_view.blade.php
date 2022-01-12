@extends('backend.dashboard')
@section('admin.content')
<div class="container-fluid pe-1 ">
    <h1 class="bg-success p-1">Skill Page <a href="{{ route('skill.add') }}" class="btn btn-primary btn-md float-end">Add your Skills</a></h1>
    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <table id="myTable" class="table table-dark table-striped table-hover table-bordered">
     <thead>
       <tr>
         <th class="text-center">SL No</th>
         <th class="text-center" >Frontend Skill</th>
         <th class="text-center" >Frontend value</th>
         <th class="text-center" >Backend Skill</th>
         <th class="text-center" >Backend value</th>
         <th class="text-center" >Action</th>
       </tr>
     </thead>
     <tbody>  
        @foreach ($skill_data as $key =>$skills)
            <tr class="text-center">
                <td>{{ $key+1 }}</td>
                <td >{{ $skills->front_skill }}</td>
                <td >{{ $skills->font_value }}</td>
                <td >{{ $skills->back_skill }}</td>
                <td >{{ $skills->back_value }}</td>
                <td >
                    <a href="{{ route('skill.edit', $skills->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('skill.delete', $skills->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
            
     </tbody>
   </table>
</div>
@endsection