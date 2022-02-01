@extends('master')
@section('content')
<h1>Staff List</h1>
@if(session('success'))
    <div class="alert alert-success">
        {!! session('success') !!}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {!! session('error') !!}
</div>
@endif
<form action="{{route('admin.staff.list')}}" method="GET">
    <input name="search" class="search-input" type="text" placeholder="Search with Name" aria-label="Search">
    <button class="btn btn-success" type="submit"><i class='fas fa-search'></i></button>
</form>
<table class="table table-bordered">
     <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Branch</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($stafflistinfo as $key=>$staff)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$staff->staffname}}</td>
        <td>{{$staff->staffemail}}</td>
        <td>{{$staff->sbranch->name}}</td>>
        <td> 
            <img src="{{url('/uploads/'.$staff->staffimage)}}" width="100px" alt="staff image">
        </td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.staffdetails.view',$staff->id)}}"><i class="fas fa-eye"></i></a></td>
            <td><a class="btn btn-warning" href="{{route('admin.staff.edit',$staff->id)}}"><i class="fas fa-edit"></i></a></td>
            <td><a class="btn btn-danger" href="{{route('admin.staffdetails.delete',$staff->id)}}"><i class="fas fa-trash-alt"></i></a>
        </td>
</tr>
@endforeach
</tbody>
</table>

@endsection