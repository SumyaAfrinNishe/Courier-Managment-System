@extends('frontend.master')
@section('content')

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Your Tracking Product Details</title>
  <link rel="stylesheet" href="{{url('frontend/trackdetails/dist.css')}}">

</head>
<body>

<div>
    <h1>Your Product Details</h1>
  </div>
<section>
    @foreach($trackings as $track)
        <h3>Your Product Details</span></h3>
  <img src="{{url('/uploads/'.$track->image)}}" alt="Your Product">
        <p class="card-text" ><b style="color:DodgerBlue;">Your Name:</b> {{$track->sender_name}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Your Contact:</b>{{$track->sender_contact}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Your Address:</b>{{$track->sender_email}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Receipient Name:</b>{{$track->recepient_name}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Recepient Phone:</b>{{$track->recepient_phone}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Recepient Address:</b>{{$track->recepient_email}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Branch Name:</b>{{$track->branch_name}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Consignment Number:</b>{{$track->track_number}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Type of Shipment:</b>{{$track->type_of_shipment}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Description:</b>{{$track->courier_description}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Quantity:</b>{{$track->quantity}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Weight:</b>{{$track->weight}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Price:</b>{{$track->price}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Pickup Date:</b>{{$track->pickup_date}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Pickup Time:</b>{{$track->pickup_time}}</p>
        <h3><b style="color:red;">Status:</b><span class="label label-info">{{$track->delievery}}</span></h3>
        @endforeach
</section>
<!-- partial -->
  
</body>
</html>
@endsection