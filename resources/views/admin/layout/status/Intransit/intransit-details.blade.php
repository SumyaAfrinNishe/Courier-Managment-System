@extends('master')
@section('content')
<div id="PrintTableArea">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$intra->image)}}" alt="booking">
        <p class="card-text" >Sender Name: {{$intra->sender_name}}</p>
        <p class="card-text" >Sender Contact: {{$intra->sender_contact}}</p>
        <p class="card-text" >Sender Address: {{$intra->sender_address}}</p>
        <p class="card-text" >Receipient Name: {{$intra->recepient_name}}</p>
        <p class="card-text" >Recepient Phone: {{$intra->recepient_phone}}</p>
        <p class="card-text" >Recepient Address: {{$intra->recepient_address}}</p>
        <p class="card-text" >Branch Name: {{$intra->name}}</p>
        <p class="card-text" >Branch Address: {{$intra->address}}</p>
        <p class="card-text" >Consignment Number: {{$intra->consignment_no}}</p>
        <p class="card-text" >Type of Shipment: {{$intra->type_of_shipment}}</p>
        <p class="card-text" >Description: {{$intra->courier_description}}</p>
        <p class="card-text" >Quantity: {{$intra->quantity}}</p>
        <p class="card-text" >Weight: {{$intra->weight}}</p>
        <p class="card-text" >Price: {{$intra->price}}</p>
        <p class="card-text" >Pickup Date: {{$intra->pickup_date}}</p>
        <p class="card-text" >Pickup Time: {{$intra->pickup_time}}</p>
        <p class="card-text" >Status: {{$intra->status}}</p>
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