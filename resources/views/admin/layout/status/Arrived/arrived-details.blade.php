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
        <form action="{{route('admin.arrived.update.status',$arrd->id)}}" method='POST' enctype="multipart/form-data">
         @method('PUT')
         @csrf
        <p class="card-text" >Status:</p>
        <select class="form-select" aria-label="Default select example" name="status">
        <option selected>{{$arrd->status}}</option>
        <option value="Accepted By Courier">Accepted By Courier</option>
        <option value="Collected">Collected</option>
        <option value="Ready to Pickup">Ready to Pickup</option>
        <option value="Picked Up">Picked Up</option>
        <option value="Out for Delievery">Out for Delievery</option>
        <option value="Shipped">Shipped</option>
        <option value="Intransit">Intransit</option>
        <option value="Delieverd">Delieverd</option>
        <option value="Unsuccessful Delievery Attempt">Unsuccessful Delievery Attempt</option>
</select>
        <div>
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
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