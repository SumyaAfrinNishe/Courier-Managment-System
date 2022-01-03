@extends('master')
@section('content')
<div id="PrintTableArea">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$collect->image)}}" alt="booking">
        <p class="card-text" >Sender Name: {{$collect->sender_name}}</p>
        <p class="card-text" >Sender Contact: {{$collect->sender_contact}}</p>
        <p class="card-text" >Sender Address: {{$collect->sender_address}}</p>
        <p class="card-text" >Receipient Name: {{$collect->recepient_name}}</p>
        <p class="card-text" >Recepient Phone: {{$collect->recepient_phone}}</p>
        <p class="card-text" >Recepient Address: {{$collect->recepient_address}}</p>
        <p class="card-text" >Branch Name: {{$collect->name}}</p>
        <p class="card-text" >Branch Address: {{$collect->address}}</p>
        <p class="card-text" >Consignment Number: {{$collect->consignment_no}}</p>
        <p class="card-text" >Type of Shipment: {{$collect->type_of_shipment}}</p>
        <p class="card-text" >Description: {{$collect->courier_description}}</p>
        <p class="card-text" >Quantity: {{$collect->quantity}}</p>
        <p class="card-text" >Weight: {{$collect->weight}}</p>
        <p class="card-text" >Price: {{$collect->price}}</p>
        <p class="card-text" >Pickup Date: {{$collect->pickup_date}}</p>
        <p class="card-text" >Pickup Time: {{$collect->pickup_time}}</p>
        <p class="card-text" >Status: {{$collect->status}}</p>
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