@extends('master')
@section('content')
<h1>Staff List</h1>
<a href="">
<table class="table">
     <thead>
    <tr>
        <!-- <th scope="col">SI No.</th>
        <th scope="col">Consignment No.</th> -->
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <!-- <th scope="col">Email</th> -->
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
        <!-- <td>{{$staff->staffemail}}</td> -->
        <!-- <td>{{$staff->staffcontact}}</td> -->
        <td>{{$staff->staffbranch}}</td>
        <td> 
            <img src="{{url('/uploads/'.$staff->staffimage)}}" width="100px" alt="staff image">
        </td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.staffdetails.view',$staff->id)}}"><i class="fas fa-eye"></i></a>
            <a class="btn btn-warning" href="{{route('admin.staff.edit',$staff->id)}}"><i class="fas fa-edit"></i></a>
            <a class="btn btn-danger" href="{{route('admin.staffdetails.delete',$staff->id)}}"><i class="fas fa-trash-alt"></i></a>
        </td>
</tr>
@endforeach
</tbody>
</table>

@endsection