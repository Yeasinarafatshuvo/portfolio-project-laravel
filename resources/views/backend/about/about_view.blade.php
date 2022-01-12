@extends('backend.dashboard')
@section('admin.content')
<div class="container-fluid pe-1 ">
    <h1 class="bg-success p-1">About Page <a href="{{ route('about.add') }}" class="btn btn-primary btn-md float-end">Add your Description</a></h1>
    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <table id="myTable" class="table table-dark table-striped table-hover table-bordered">
     <thead>
       <tr>
         <th class="text-center">SL No</th>
         <th class="text-center" >Description</th>
         <th class="text-center" >Action</th>
       </tr>
     </thead>
     <tbody>  
        @foreach ($about_data as $key =>$description)
            <tr class="text-center">
                <td class="pt-3">{{ $key +1}}</td>
                <td >{{ $description->about_me}}</td>
                <td >
                    <a href="{{ route('about.edit', $description->id) }}" class="btn btn-primary">Edit</a>              
                </td>
            </tr>
        @endforeach
            
     </tbody>
   </table>
</div>
@endsection