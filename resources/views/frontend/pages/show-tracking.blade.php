@extends('frontend.master')
@section('content')
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
<center>
<h1>Your Product Details</h1>
<center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>


</center>

@foreach($trackings as $track)
<div>
<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$track->cus_image)}}" alt="post">
</p>
</div>
<p><h3 style="color:DodgerBlue">Tracking Number:{{$track->track_number}}</span></h3><h2><span style="color:#2874A6"></span><h2></p>
        <p class="card-text" ><b style="color:#2E4053;">Your Name:</b> {{$track->user->name}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Your Contact:</b>{{$track->user->phone}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Your Address:</b>{{$track->user->email}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Receipient Name:</b>{{$track->recepient_name}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Recepient Phone:</b>{{$track->recepient_phone}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Recepient Address:</b>{{$track->recepient_email}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Branch Name:</b>{{$track->branch_name}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Type of Shipment:</b>{{$track->type_of_shipment}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Description:</b>{{$track->courier_description}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Quantity:</b>{{$track->quantity}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Weight:</b>{{$track->weight}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Price:</b>{{$track->price}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Pickup Date:</b>{{$track->pickup_date}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Pickup Time:</b>{{$track->pickup_time}}</p>

<p><h4><span style="color:red">Delivery Status:{{$track->delievery}}</span></h4></p>
@endforeach

</center>
</div>
<!--  -->
@endsection