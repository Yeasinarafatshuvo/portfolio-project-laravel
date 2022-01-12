@extends('backend.dashboard')
@section('admin.content')
   <div class="container-fluid pe-1">
       <h1 class="bg-success">Profile Page</h1>
       <table id="myTable" class="table table-dark table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">SL No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($profile_data as $item)
            <tr class="text-center">
                <td class="pt-5">1</td>
                <td class="pt-5">{{ $item->user_name }}</td>
                <td class="pt-5">{{ $item->user_email }}</td>
                <td class="pt-5">{{ $item->user_phone }}</td>
                
                <td><img src="{{ asset('backend/images/' .$item->user_photo) }}" alt="" style="widows: 60px"; height="100px"></td>
                <td class="pt-5">
                    <a href="" class="btn btn-primary">Edit</a>
                   
                </td>
              </tr>
            @endforeach
                  
        </tbody>
      </table>
   </div>
@endsection
@section('scripts')
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection