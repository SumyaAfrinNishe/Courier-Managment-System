@extends('master')
@section('content')

<h1>Total Courier Arrived Pickup</h1>
<a href="">

    <table class="table">
    <thead>
    <tr>
        <!-- <th scope="col">ID</th> -->
        <th scope="col">Consignment No.</th>
        <th scope="col">Sender</th>
        <th scope="col">Recepient</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($pickups as $p)
        <td>{{$p->consignment_no}}</td>
        <td>{{$p->sender_name}}</td>
        <td>{{$p->recepient_name}}</td>
        <td>{{$p->status}}</td>
        @endforeach
   </tbody>
    @endsection