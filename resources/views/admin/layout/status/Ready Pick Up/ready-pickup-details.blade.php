@extends('master')
@section('content')
<div id="PrintTableArea">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$rp->image)}}" alt="booking">
        <p class="card-text" >Sender Name: {{$rp->sender_name}}</p>
        <p class="card-text" >Sender Contact: {{$rp->sender_contact}}</p>
        <p class="card-text" >Sender Address: {{$rp->sender_address}}</p>
        <p class="card-text" >Receipient Name: {{$rp->recepient_name}}</p>
        <p class="card-text" >Recepient Phone: {{$rp->recepient_phone}}</p>
        <p class="card-text" >Recepient Address: {{$rp->recepient_address}}</p>
        <p class="card-text" >Branch Name: {{$rp->name}}</p>
        <p class="card-text" >Branch Address: {{$rp->address}}</p>
        <p class="card-text" >Consignment Number: {{$rp->consignment_no}}</p>
        <p class="card-text" >Type of Shipment: {{$rp->type_of_shipment}}</p>
        <p class="card-text" >Description: {{$rp->courier_description}}</p>
        <p class="card-text" >Quantity: {{$rp->quantity}}</p>
        <p class="card-text" >Weight: {{$rp->weight}}</p>
        <p class="card-text" >Price: {{$rp->price}}</p>
        <p class="card-text" >Pickup Date: {{$rp->pickup_date}}</p>
        <p class="card-text" >Pickup Time: {{$rp->pickup_time}}</p>
        <p class="card-text" >Status: {{$rp->status}}</p>
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