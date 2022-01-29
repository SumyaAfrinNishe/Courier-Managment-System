@extends('frontend.master')
@section('content')
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
<center>

<h1>Your Product Details</h1>


@foreach($trackings as $track)
<div>
<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$track->cus_image)}}" alt="post">
</p>
</div>
<div id="PrintTableArea">
<p><h3 style="color:DodgerBlue">Tracking Number:{{$track->track_number}}</span></h3><h2><span style="color:#2874A6"></span><h2></p>
        <p class="card-text" ><b style="color:#6c11b8;">Your Name:</b> {{$track->user->name}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">Your Contact:</b>{{$track->user->phone}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">Your Address:</b>{{$track->user->email}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">Receipient Name:</b>{{$track->recepient_name}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">Recepient Phone:</b>{{$track->recepient_phone}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">Recepient Address:</b>{{$track->recepient_email}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">From Branch Name:</b>{{$track->frombranch->name}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">To Branch Name:</b>{{$track->tobranch->name}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">Type of Shipment:</b>{{$track->type_of_shipment}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">Description:</b>{{$track->courier_description}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">Quantity:</b>{{$track->quantity}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">Weight:</b>{{$track->weight}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">Price:</b>{{$track->price}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">Pickup Date:</b>{{$track->pickup_date}}</p>
        <p class="card-text" ><b style="color:#6c11b8;">Pickup Time:</b>{{$track->pickup_time}}</p>
        <p class="card-text" ><b style="color:red;">Delivery Status:</b>{{$track->delievery}}</p>
        <!-- <center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a></center> -->

@endforeach

</center>
</div>
<center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a></center>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

@endsection