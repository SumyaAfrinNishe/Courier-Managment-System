@extends('master')
@section('content')
<div id="PrintTableArea">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$ac->image)}}" alt="booking">
        <p class="card-text" ><b style="color:blue">Sender Name:</b> {{$ac->sender_name}}</p>
        <p class="card-text" ><b style="color:blue">Sender Contact:</b> {{$ac->sender_contact}}</p>
        <p class="card-text" ><b style="color:blue">Sender Address:</b> {{$ac->sender_email}}</p>
        <p class="card-text" ><b style="color:blue">Receipient Name:</b> {{$ac->recepient_name}}</p>
        <p class="card-text" ><b style="color:blue">Recepient Phone:</b> {{$ac->recepient_phone}}</p>
        <p class="card-text" ><b style="color:blue">Recepient Address:</b> {{$ac->recepient_email}}</p>
        <p class="card-text" ><b style="color:blue">Branch Name:</b> {{$ac->branch_name}}</p>
        <p class="card-text" ><b style="color:blue">Consignment Number:</b> {{$ac->track_number}}</p>
        <p class="card-text" ><b style="color:blue">Type of Shipment:</b> {{$ac->type_of_shipment}}</p>
        <p class="card-text" ><b style="color:blue">Description:</b> {{$ac->courier_description}}</p>
        <p class="card-text" ><b style="color:blue">Quantity:</b> {{$ac->quantity}}</p>
        <p class="card-text" ><b style="color:blue">Weight:</b> </b>{{$ac->weight}}</p>
        <p class="card-text" ><b style="color:blue">Price:</b> {{$ac->price}}</p>
        <p class="card-text" ><b style="color:blue">Pickup Date:</b> {{$ac->pickup_date}}</p>
        <p class="card-text" ><b style="color:blue">Pickup Time:</b> {{$ac->pickup_time}}</p>
        <form action="{{route('admin.accept.update.status',$ac->id)}}" method='POST' enctype="multipart/form-data">
         @method('PUT')
         @csrf
        <p class="card-text" >Status:</p>
        <select class="form-select" aria-label="Default select example" name="delievery">
        <option selected>{{$ac->delievery}}</option>
        <option value="Courier Collected">Courier Collected</option>
        <option value="Ready To Pick Up">Ready to Pickup</option>
        <option value="Picked">Picked</option>
        <option value="Out For Delievery">Out For Delievery</option>
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