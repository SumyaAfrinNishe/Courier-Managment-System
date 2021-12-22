@extends('master')
@section('content')

<h1>Branch list</h1>
<a href="">

    <table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Contact</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">State</th>
        <th scope="col">Country</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($branchlistlist as $key=>$branch )
    <tr>
       
        <td>{{$key+1}}</td> 
        <td>{{$branch->name}} "---" {{$branch->id}}</td>
        <td>{{$branch->contact}}</td>
        <td>{{$branch->email}}</td>
        <td>{{$branch->address}}</td>
        <td>{{$branch->city}}</td>
        <td>{{$branch->state}}</td>
        <td>{{$branch->country}}</td>
        <td> 
            <img src="{{url('/uploads/'.$branch->image)}}" width="100px" alt="product image">
        </td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.branchdetails.view',$branch->id)}}">View</a>
        </td>
        <td>
            <a class="btn btn-danger" href="{{route('admin.branchdetails.delete',$branch->id)}}">Delete</a>
        </td>
</tr>
@endforeach
    </tbody>
</table>

@endsection