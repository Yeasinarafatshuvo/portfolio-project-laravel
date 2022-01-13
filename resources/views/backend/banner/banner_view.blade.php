@extends('backend.dashboard')
@section('admin.content')
<div class="container-fluid pe-1 ">
    <h1 class="bg-success p-1">Banner Page <a href="{{ route('banner.add') }}" class="btn btn-primary btn-md float-end">Add Banner</a></h1>
    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <table id="myTable" class="table table-dark table-striped table-hover table-bordered">
     <thead>
       <tr>
         <th class="text-center">SL No</th>
         <th class="text-center" >skill</th>
         <th class="text-center" >area</th>
         <th class="text-center" >profile Id</th>
         <th class="text-center" >Cover Photo</th>
         <th class="text-center" >Action</th>
       </tr>
     </thead>
     <tbody>  
        @foreach ($banners_data as $key =>$banners)
            <tr class="text-center">
                <td class="pt-5">{{ $key+1 }}</td>
                <td class="pt-5">{{ $banners->skills }}</td>
                <td class="pt-5">{{ $banners->area }}</td>
                <td class="pt-5">{{ $banners->profile_id }}</td>
                <td><img src="{{ asset('backend/images/' .$banners->cover_photos) }}" alt="" style="width: 200px"; height="100px"></td>
                <td class="pt-5">
                    <a href="{{ route('banner.edit', $banners->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
            
     </tbody>
   </table>
</div>
@endsection