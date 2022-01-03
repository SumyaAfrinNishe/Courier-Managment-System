@extends('master')
@section('content')
<div id="PrintTableArea">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$p->image)}}" alt="booking">
        <p class="card-text" >Sender Name: {{$p->sender_name}}</p>
        <p class="card-text" >Sender Contact: {{$p->sender_contact}}</p>
        <p class="card-text" >Sender Address: {{$p->sender_address}}</p>
        <p class="card-text" >Receipient Name: {{$p->recepient_name}}</p>
        <p class="card-text" >Recepient Phone: {{$p->recepient_phone}}</p>
        <p class="card-text" >Recepient Address: {{$p->recepient_address}}</p>
        <p class="card-text" >Branch Name: {{$p->name}}</p>
        <p class="card-text" >Branch Address: {{$p->address}}</p>
        <p class="card-text" >Consignment Number: {{$p->consignment_no}}</p>
        <p class="card-text" >Type of Shipment: {{$p->type_of_shipment}}</p>
        <p class="card-text" >Description: {{$p->courier_description}}</p>
        <p class="card-text" >Quantity: {{$p->quantity}}</p>
        <p class="card-text" >Weight: {{$p->weight}}</p>
        <p class="card-text" >Price: {{$p->price}}</p>
        <p class="card-text" >Pickup Date: {{$p->pickup_date}}</p>
        <p class="card-text" >Pickup Time: {{$p->pickup_time}}</p>
        <p class="card-text" >Status: {{$p->status}}</p>
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