@extends('master')
@section('content')


<div class="card">
  <div class="card-body">
    <h5 class="card-title">Customer Infromation Details</h5>
        <p class="card-text" >Customer Name: {{$info->yourname}}</p>
        <p class="card-text" >Customer Contact: {{$info->yourcontact}}</p>
        <p class="card-text" >Customer Address: {{$info->youraddress}}</p>
        <p class="card-text" >Receipient Name: {{$info->receivername}}</p>
        <p class="card-text" >Recepient Phone: {{$info->receivercontact}}</p>
        <p class="card-text" >Recepient Address: {{$info->receiveraddress}}</p>
        <p class="card-text" >Branch Name: {{$info->branchname}}</p>
        <p class="card-text" >Type of Shipment: {{$info->type}}</p>
        <p class="card-text" >Quantity: {{$info->quantity}}</p>
  </div>


@endsection