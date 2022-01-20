@extends('master')
@section('content')
<div id="PrintTableArea">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$p->image)}}" alt="booking">
        <p class="card-text" ><b style="color:blue">Sender Name:</b>{{$p->sender_name}}</p>
        <p class="card-text" ><b style="color:blue">Sender Contact:</b> {{$p->sender_contact}}</p>
        <p class="card-text" ><b style="color:blue">Sender Address: </b>{{$p->sender_email}}</p>
        <p class="card-text" ><b style="color:blue">Receipient Name:</b> {{$p->recepient_name}}</p>
        <p class="card-text" ><b style="color:blue">Recepient Phone:</b> {{$p->recepient_phone}}</p>
        <p class="card-text" ><b style="color:blue">Recepient Address:</b> {{$p->recepient_email}}</p>
        <p class="card-text" ><b style="color:blue">Branch Name:</b> {{$p->branch_name}}</p>
        <p class="card-text" ><b style="color:blue">Branch Address:</b> {{$p->address}}</p>
        <p class="card-text" ><b style="color:blue">Consignment Number:</b> {{$p->track_number}}</p>
        <p class="card-text" ><b style="color:blue">Type of Shipment:</b> {{$p->type_of_shipment}}</p>
        <p class="card-text" ><b style="color:blue">Description:</b> {{$p->courier_description}}</p>
        <p class="card-text" ><b style="color:blue">Quantity:</b> {{$p->quantity}}</p>
        <p class="card-text" ><b style="color:blue">Weight:</b> {{$p->weight}}</p>
        <p class="card-text" ><b style="color:blue">Price: </b>{{$p->price}}</p>
        <p class="card-text" ><b style="color:blue">Pickup Date:</b> {{$p->pickup_date}}</p>
        <p class="card-text" ><b style="color:blue">Pickup Time:</b> {{$p->pickup_time}}</p>
        <form action="{{route('admin.pickup.update.status',$p->id)}}" method='POST' enctype="multipart/form-data">
         @method('PUT')
         @csrf
        <p class="card-text" >Status:</p>
        <select class="form-select" aria-label="Default select example" name="delievery">
        <option selected>{{$p->delievery}}</option>
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