@extends('master')
@section('content')

<h1>Total Delieverd Courier</h1>
<a href="">

    <table class="table">
    <thead>
    <tr>
        
        <th scope="col">Consignment No.</th>
        <th scope="col">Sender</th>
        <th scope="col">Recepient</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($delievers as $d)
        <td>{{$d->consignment_no}}</td>
        <td>{{$d->sender_name}}</td>
        <td>{{$d->recepient_name}}</td>
        <td>{{$d->status}}</td>
        @endforeach
   </tbody>
    @endsection