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
        <form action="{{route('admin.pickup.update.status',$p->id)}}" method='POST' enctype="multipart/form-data">
         @method('PUT')
         @csrf
        <p class="card-text" >Status:</p>
        <select class="form-select" aria-label="Default select example" name="status">
        <option selected>{{$p->status}}</option>
        <option value="Accepted By Courier">Accepted By Courier</option>
        <option value="Collected">Collected</option>
        <option value="Ready to Pickup">Ready to Pickup</option>
        <option value="Out for Delievery">Out for Delievery</option>
        <option value="Shipped">Shipped</option>
        <option value="Intransit">Intransit</option>
        <option value="Arrived At Destination">Arrived At Destination</option>
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