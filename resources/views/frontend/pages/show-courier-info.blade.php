@extends('frontend.master')
@section('content')

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Your Courier Information</title>
  <link rel="stylesheet" href="{{url('frontend/trackdetails/dist.css')}}">

</head>
<body>

<div>
    <h1>Courier Confirm</h1>
  </div>
<section>
@foreach($confirms as $confirm )
        <h3>Courier Information</span></h3>
  <!-- <img src="{{url('/uploads/'.$confirm->image)}}" alt="Your Product"> -->
        <p class="card-text" ><b style="color:DodgerBlue;">Your Name:</b> {{$confirm->sender_name}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Your Address:</b>{{$confirm->sender_address}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Receipient Name:</b>{{$confirm->recepient_name}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Recepient Address:</b>{{$confirm->recepient_address}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Branch Name:</b>{{$confirm->name}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Branch Address:</b>{{$confirm->address}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Consignment Number:</b>{{$confirm->consignment_no}}</p>
        <p class="card-text" ><b style="color:DodgerBlue;">Type of Shipment:</b>{{$confirm->type_of_shipment}}</p>
       @endforeach
</section>
<!-- partial -->
  
</body>
</html>
@endsection