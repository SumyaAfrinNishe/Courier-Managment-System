@extends('master')
@section('content')
<div id="PrintTableArea">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$arrd->image)}}" alt="booking">
        <p class="card-text" >Sender Name: {{$arrd->sender_name}}</p>
        <p class="card-text" >Sender Contact: {{$arrd->sender_contact}}</p>
        <p class="card-text" >Sender Address: {{$arrd->sender_address}}</p>
        <p class="card-text" >Receipient Name: {{$arrd->recepient_name}}</p>
        <p class="card-text" >Recepient Phone: {{$arrd->recepient_phone}}</p>
        <p class="card-text" >Recepient Address: {{$arrd->recepient_address}}</p>
        <p class="card-text" >Branch Name: {{$arrd->name}}</p>
        <p class="card-text" >Branch Address: {{$arrd->address}}</p>
        <p class="card-text" >Consignment Number: {{$arrd->consignment_no}}</p>
        <p class="card-text" >Type of Shipment: {{$arrd->type_of_shipment}}</p>
        <p class="card-text" >Description: {{$arrd->courier_description}}</p>
        <p class="card-text" >Quantity: {{$arrd->quantity}}</p>
        <p class="card-text" >Weight: {{$arrd->weight}}</p>
        <p class="card-text" >Price: {{$arrd->price}}</p>
        <p class="card-text" >Pickup Date: {{$arrd->pickup_date}}</p>
        <p class="card-text" >Pickup Time: {{$arrd->pickup_time}}</p>
        <p class="card-text" >Status: {{$arrd->status}}</p>
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