@extends('master')
@section('content')

<h1>Total Out for Delievery</h1>
<a href="">

    <table class="table">
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
    @foreach($outdelievers as $outd)
        
        <td>{{$outd->consignment_no}}</td>
        <td>{{$outd->sender_name}}</td>
        <td>{{$outd->recepient_name}}</td>
        <td>{{$outd->status}}</td>
        @endforeach
    <tbody>

</tbody>
    @endsection