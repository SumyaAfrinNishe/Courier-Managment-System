@extends('master')
@section('content')
<div id="PrintTableArea">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$unsu->image)}}" alt="booking">
        <p class="card-text" >Sender Name: {{$unsu->sender_name}}</p>
        <p class="card-text" >Sender Contact: {{$unsu->sender_contact}}</p>
        <p class="card-text" >Sender Address: {{$unsu->sender_address}}</p>
        <p class="card-text" >Receipient Name: {{$unsu->recepient_name}}</p>
        <p class="card-text" >Recepient Phone: {{$unsu->recepient_phone}}</p>
        <p class="card-text" >Recepient Address: {{$unsu->recepient_address}}</p>
        <p class="card-text" >Branch Name: {{$unsu->name}}</p>
        <p class="card-text" >Branch Address: {{$unsu->address}}</p>
        <p class="card-text" >Consignment Number: {{$unsu->consignment_no}}</p>
        <p class="card-text" >Type of Shipment: {{$unsu->type_of_shipment}}</p>
        <p class="card-text" >Description: {{$unsu->courier_description}}</p>
        <p class="card-text" >Quantity: {{$unsu->quantity}}</p>
        <p class="card-text" >Weight: {{$unsu->weight}}</p>
        <p class="card-text" >Price: {{$unsu->price}}</p>
        <p class="card-text" >Pickup Date: {{$unsu->pickup_date}}</p>
        <p class="card-text" >Pickup Time: {{$unsu->pickup_time}}</p>
        <p class="card-text" >Status: {{$unsu->status}}</p>
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