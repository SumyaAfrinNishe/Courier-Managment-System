@extends('master')
@section('content')
<div id="PrintTableArea">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Booking Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$book->image)}}" alt="booking">
        <p class="card-text" >Sender Name: {{$book->sender_name}}</p>
        <p class="card-text" >Sender Contact: {{$book->sender_contact}}</p>
        <p class="card-text" >Sender Address: {{$book->sender_address}}</p>
        <p class="card-text" >Receipient Name: {{$book->recepient_name}}</p>
        <p class="card-text" >Recepient Phone: {{$book->recepient_phone}}</p>
        <p class="card-text" >Recepient Address: {{$book->recepient_address}}</p>
        <p class="card-text" >Branch Name: {{$book->name}}</p>
        <p class="card-text" >Branch Address: {{$book->address}}</p>
        <p class="card-text" >Consignment Number: {{$book->consignment_no}}</p>
        <p class="card-text" >Type of Shipment: {{$book->type_of_shipment}}</p>
        <p class="card-text" >Description: {{$book->courier_description}}</p>
        <p class="card-text" >Quantity: {{$book->quantity}}</p>
        <p class="card-text" >Weight: {{$book->weight}}</p>
        <p class="card-text" >Price: {{$book->price}}</p>
        <p class="card-text" >Pickup Date: {{$book->pickup_date}}</p>
        <p class="card-text" >Pickup Time: {{$book->pickup_time}}</p>
        <p class="card-text" >Status: {{$book->status}}</p>
  </div>
  
</div>

<a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>
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