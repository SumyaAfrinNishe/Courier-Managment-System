@extends('master')
@section('content')

<h1>Total Courier Arrived at Destination</h1>
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
    
    @foreach($arrives as $arrd)
        <td>{{$arrd->consignment_no}}</td>
        <td>{{$arrd->sender_name}}</td>
        <td>{{$arrd->recepient_name}}</td>
        <td>{{$arrd->status}}</td>
        @endforeach
   </tbody>
    @endsection