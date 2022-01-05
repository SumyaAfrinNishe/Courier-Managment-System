@extends('master')
@section('content')
<div id="PrintTableArea">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$d->image)}}" alt="booking">
        <p class="card-text" >Sender Name: {{$d->sender_name}}</p>
        <p class="card-text" >Sender Contact: {{$d->sender_contact}}</p>
        <p class="card-text" >Sender Address: {{$d->sender_address}}</p>
        <p class="card-text" >Receipient Name: {{$d->recepient_name}}</p>
        <p class="card-text" >Recepient Phone: {{$d->recepient_phone}}</p>
        <p class="card-text" >Recepient Address: {{$d->recepient_address}}</p>
        <p class="card-text" >Branch Name: {{$d->name}}</p>
        <p class="card-text" >Branch Address: {{$d->address}}</p>
        <p class="card-text" >Consignment Number: {{$d->consignment_no}}</p>
        <p class="card-text" >Type of Shipment: {{$d->type_of_shipment}}</p>
        <p class="card-text" >Description: {{$d->courier_description}}</p>
        <p class="card-text" >Quantity: {{$d->quantity}}</p>
        <p class="card-text" >Weight: {{$d->weight}}</p>
        <p class="card-text" >Price: {{$d->price}}</p>
        <p class="card-text" >Pickup Date: {{$d->pickup_date}}</p>
        <p class="card-text" >Pickup Time: {{$d->pickup_time}}</p>
        <form action="{{route('admin.deliever.update.status',$collect->id)}}" method='POST' enctype="multipart/form-data">
         @method('PUT')
         @csrf
        <p class="card-text" >Status:</p>
        <select class="form-select" aria-label="Default select example" name="status">
        <option selected>{{$d->status}}</option>
        <option value="Accepted By Courier">Accepted By Courier</option>
        <option value="Collected">Collected</option>
        <option value="Ready to Pickup">Ready to Pickup</option>
        <option value="Picked Up">Picked Up</option>
        <option value="Out for Delievery">Out for Delievery</option>
        <option value="Shipped">Shipped</option>
        <option value="Intransit">Intransit</option>
        <option value="Arrived At Destination">Arrived At Destination</option>
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

@endsect