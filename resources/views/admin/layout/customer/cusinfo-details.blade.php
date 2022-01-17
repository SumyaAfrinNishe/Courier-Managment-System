@extends('master')
@section('content')


<div class="card">
  <div class="card-body">
    <h5 class="card-title">Customer Infromation Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$info->image)}}" alt="booking">
        <p class="card-text" ><b style="color:blue">Customer Name: </b> {{$info->sender_name}}</p>
        <p class="card-text" ><b style="color:blue">Customer Contact:</b> {{$info->sender_email}}</p>
        <p class="card-text" ><b style="color:blue">Customer Address:</b> {{$info->sender_contact}}</p>
        <p class="card-text" ><b style="color:blue">Receipient Name: </b>{{$info->recepient_name}}</p>
        <p class="card-text" ><b style="color:blue">Recepient Phone:</b> {{$info->recepient_email}}</p>
        <p class="card-text" ><b style="color:blue">Recepient Address: </b>{{$info->recepient_phone}}</p>
        <p class="card-text" ><b style="color:blue">Branch Name:</b> {{$info->branch_name}}</p>
        <p class="card-text" ><b style="color:blue">Type of Shipment:</b> {{$info->type_of_shipment}}</p>
        <p class="card-text" ><b style="color:blue">Courier Description:</b> {{$info->courier_description}}</p>
        <p class="card-text" ><b style="color:blue">Courier Description:</b> {{$info->quantity}}</p>
        <p class="card-text" ><b style="color:blue">Courier Description:</b> {{$info->weight}}</p>
  </div>


@endsection