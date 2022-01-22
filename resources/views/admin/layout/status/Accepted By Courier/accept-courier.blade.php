@extends('master')
@section('content')

<h1>Accepted By Courier</h1>
<a href="">

    <table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Consignment No.</th>
        <th scope="col">Sender</th>
        <th scope="col">Recepient</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($acceptcouriers as $key=>$ac)
        <td>{{$key+1}}</td>
        <td>{{$ac->track_number}}</td>
        <td>{{$ac->user->name}}</td>
        <td>{{$ac->recepient_name}}</td>
        <td>{{$ac->delievery}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.acceptdetails.view',$ac->id)}}"><i class="fas fa-eye"></i></a>
            
        </td>
        @endforeach
   </tbody>
    
    @endsection