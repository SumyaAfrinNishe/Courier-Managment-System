@extends('master')
@section('content')
<div id="PrintTableArea">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$s->image)}}" alt="booking">
        <p class="card-text" >Sender Name: {{$s->sender_name}}</p>
        <p class="card-text" >Sender Contact: {{$s->sender_contact}}</p>
        <p class="card-text" >Sender Address: {{$s->sender_address}}</p>
        <p class="card-text" >Receipient Name: {{$s->recepient_name}}</p>
        <p class="card-text" >Recepient Phone: {{$s->recepient_phone}}</p>
        <p class="card-text" >Recepient Address: {{$s->recepient_address}}</p>
        <p class="card-text" >Branch Name: {{$s->name}}</p>
        <p class="card-text" >Branch Address: {{$s->address}}</p>
        <p class="card-text" >Consignment Number: {{$s->consignment_no}}</p>
        <p class="card-text" >Type of Shipment: {{$s->type_of_shipment}}</p>
        <p class="card-text" >Description: {{$s->courier_description}}</p>
        <p class="card-text" >Quantity: {{$s->quantity}}</p>
        <p class="card-text" >Weight: {{$s->weight}}</p>
        <p class="card-text" >Price: {{$s->price}}</p>
        <p class="card-text" >Pickup Date: {{$s->pickup_date}}</p>
        <p class="card-text" >Pickup Time: {{$s->pickup_time}}</p>
        <p class="card-text" >Status: {{$s->status}}</p>
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