@extends('backend.dashboard')
@section('admin.content')
<div class="container-fluid pe-1 ">
    <h1 class="bg-success p-1">Protfolio Page <a href="" class="btn btn-primary btn-md float-end">Add Protfolio</a></h1>
    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <table id="myTable" class="table table-dark table-striped table-hover table-bordered">
     <thead>
       <tr>
         <th class="text-center">SL No</th>
         <th class="text-center" >Organization Name</th>
         <th class="text-center" >Position</th>
         <th class="text-center" >Time</th>
         <th class="text-center" >Action</th>
       </tr>
     </thead>
     <tbody>  
        @foreach ($experience_data as $key =>$experience)
            <tr class="text-center">
               <td>{{ $key+1 }}</td>
               <td>{{ $experience->organization }}</td>
               <td>{{ $experience->position }}</td>
               <td>{{ $experience->time }}</td>
               <td style="width: 130px">
                   <a href="{{ route('experience.edit', $experience->id) }}" class="btn btn-primary btn-sm">Edit</a>
                   <a href="{{ route('experience.delete', $experience->id) }}" class="btn btn-danger btn-sm">Delete</a>
               </td>
            </tr>
        @endforeach
            
     </tbody>
   </table>
</div>
@endsection