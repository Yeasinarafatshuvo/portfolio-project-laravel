@extends('backend.dashboard')
@section('admin.content')
<div class="container-fluid pe-1 ">
    <h1 class="bg-success p-1">Portfolio Page <a href="{{ route('project.add') }}" class="btn btn-primary btn-md float-end">Add Project</a></h1>
    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <table id="myTable" class="table table-dark table-striped table-hover table-bordered">
     <thead>
       <tr>
         <th class="text-center">SL No</th>
         <th class="text-center" >Project Name</th>
         <th class="text-center" >Project Url</th>
         <th class="text-center" >Project Photo</th>
         <th class="text-center" >Action</th>
       </tr>
     </thead>
     <tbody>  
        @foreach ($all_project_data as $key =>$project)
            <tr class="text-center">
               <td class="pt-5">{{ $key+1 }}</td>
               <td class="pt-5">{{ $project->project_name }}</td>
               <td class="pt-5">{{ $project->project_url }}</td>
               <td><img src="{{ asset('backend/images/' .$project->project_photo) }}" alt="" style="height: 150px"; width="100px"></td>
               <td class="pt-5">
                 <a href="{{ route('project.edit', $project->id) }}" class="btn btn-primary">Edit</a>
                 <a href="" class="btn btn-danger">Delete</a>
               </td>
            </tr>
        @endforeach
            
     </tbody>
   </table>
</div>
@endsection