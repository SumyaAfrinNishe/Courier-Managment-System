@extends('master')
@section('content')

<h1>Courier Picked Up</h1>
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
    @foreach($pickups as $key=>$p)
        <td>{{$key+1}}</td>
        <td>{{$p->track_number}}</td>
        <td>{{$p->sender_name}}</td>
        <td>{{$p->recepient_name}}</td>
        <td>{{$p->delievery}}</td>
        <td>
        <a class="btn btn-primary" href="{{route('admin.pickup.details.view',$p->id)}}"><i class="fas fa-eye"></i></a>
            
        @endforeach
   </tbody>
    @endsection