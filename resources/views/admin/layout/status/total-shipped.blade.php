@extends('master')
@section('content')

<h1>Total Shipped</h1>
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
    @foreach($ships as $s)
        <td>{{$s->consignment_no}}</td>
        <td>{{$s->sender_name}}</td>
        <td>{{$s->recepient_name}}</td>
        <td>{{$s->status}}</td>
        @endforeach
   </tbody>
    @endsection