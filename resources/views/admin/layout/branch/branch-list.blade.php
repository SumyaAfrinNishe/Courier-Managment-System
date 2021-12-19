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
    @foreach($branchlistlist as $key=>$item )
    <tr>
       
        <td>{{$key+1}}</td> 
        <td>{{$item->name}}</td>
        <td>{{$item->contact}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->city}}</td>
        <td>{{$item->state}}</td>
        <td>{{$item->country}}</td>
        <td> 
            <img src="{{url('/uploads/'.$item->image)}}" width="100px" alt="product image">
        </td>
</tr>
@endforeach
    </tbody>
</table>

@endsection