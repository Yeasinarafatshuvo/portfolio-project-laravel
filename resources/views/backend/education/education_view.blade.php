@extends('backend.dashboard')
@section('admin.content')
<div class="container-fluid pe-1 ">
    <h1 class="bg-success p-1">Education Page <a href="{{ route('education.add') }}" class="btn btn-primary btn-md float-end">Add Education</a></h1>
    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <table id="myTable" class="table table-dark table-striped table-hover table-bordered">
     <thead>
       <tr>
         <th class="text-center">SL No</th>
         <th class="text-center" >Education Organization</th>
         <th class="text-center" >Education Level</th>
         <th class="text-center" >Passing Year</th>
         <th class="text-center" >Result</th>
         <th class="text-center" >Action</th>
       </tr>
     </thead>
     <tbody>  
        @foreach ($education_data as $key =>$educaiton)
            <tr class="text-center">
               <td>{{ $key+1 }}</td>
               <td>{{ $educaiton->edu_organization }}</td>
               <td>{{ $educaiton->edu_level }}</td>
               <td>{{ $educaiton->passing_year }}</td>
               <td>{{ $educaiton->result }}</td>
               <td style="width: 130px">
                   <a href="{{ route('education.edit', $educaiton->id) }}" class="btn btn-primary btn-sm">Edit</a>
                   <a href="{{ route('education.delete', $educaiton->id) }}" class="btn btn-danger btn-sm">Delete</a>
               </td>
            </tr>
        @endforeach
            
     </tbody>
   </table>
</div>
@endsection