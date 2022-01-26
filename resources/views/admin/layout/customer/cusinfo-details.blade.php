@extends('master')
@section('content')

<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
   /* .dropdown-menu{
     a{
     text-decoration: none;
    }
   } */
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<center>
<h1>Customer Request Details</h1>
<center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>


</center>



<div id="PrintTableArea">
<p><h3>Customer Name: {{$info->user->name}}</span></h3><h2><span style="color:#2874A6"></span><h2></p>
<p><h4><span style="color:#2E4053">Customer Contact: {{$info->user->phone}}</span></h4></p>
<p><h4><span style="color:#2E4053">Customer Address: {{$info->user->email}}</span></h4></p>
<p><h4><span style="color:#2E4053">Customer Email: {{$info->user->email}}</span></h4></p>
<p><h4><span style="color:#2E4053">Receipient Name: {{$info->recepient_name}}</span></h4></p>
<p><h4><span style="color:#2E4053">Recepient Phone: {{$info->recepient_phone}}</p></span></h4></p>
<p><h4><span style="color:#2E4053">Recepient Email: {{$info->recepient_email}}</span></h4></p>
<p><h4><span style="color:#2E4053">From Branch: {{$info->frombranch->name}}</span></h4></p>
<p><h4><span style="color:#2E4053">To Branch: {{$info->tobranch->name}}</span></h4></p>
<p><h4><span style="color:#2E4053">Type of Shipment: {{$info->type_of_shipment}}</span></h4></p>
<p><h4><span style="color:#2E4053">Courier Description: {{$info->courier_description}}</span></h4></p>
<p><h4><span style="color:#2E4053">Quantity: {{$info->quantity}}</span></h4></p>
<p><h4><span style="color:#2E4053">Payment Type: {{$info->payment}}</span></h4></p>
<p><h4><span style="color:#2E4053">Price: {{$info->price}}</span></h4></p>
<p><h4><span style="color:#2E4053">Pickup Date: {{$info->pickup_date}}</span></h4></p>
<p><h4><span style="color:#2E4053">Pickup Time: {{$info->pickup_time}}</span></h4></p>
<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$info->cus_image)}}" alt="post">
</p>
<p><h4><span style="color:green">Tracking Number: {{$info->track_number}}</span></h4></p>

  </div>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

<center>
  <form action="{{route('admin.customer.details.update',$info->id)}}" method='POST'>
  @method('PUT')
  @csrf

<div class="dropdown">
<button class="dropbtn">
    Delivery Status
  </button>
  <div class="dropdown-content">
  <a href="{{route('admin.courier.accepted',$info->id)}}" style="text-decoration: none;">Accepted By Courier</a>
  <a href="{{route('admin.status.collected',$info->id)}}" style="text-decoration: none;">Courier Collected</a>
  <a href="{{route('admin.courier.ready.pickup',$info->id)}}" style="text-decoration: none;">Ready To Pick Up</a>
  <a href="{{route('admin.courier.picked',$info->id)}}" style="text-decoration: none;">Courier Picked Up</a>
  <a href="{{route('admin.courier.shipped',$info->id)}}" style="text-decoration: none;">Shipped</a>
  <a href="{{route('admin.courier.intransit',$info->id)}}" style="text-decoration: none;">In-Transit</a>
  <a href="{{route('admin.courier.arrived.destination',$info->id)}}" style="text-decoration: none;">Arrived At Destination</a>
  <a href="{{route('admin.courier.out.for.delievery',$info->id)}}" style="text-decoration: none;">Out For Delievery</a>
  <a href="{{route('admin.courier.deliverd',$info->id)}}" style="text-decoration: none;">Delieverd </a>
  <a href="{{route('admin.courier.unsuccessful',$info->id)}}" style="text-decoration: none;">Unsuccessful Delievery Attempt</a>
  
  </div>
  <div>
</div>
  </center>
  <center>
  <div class="mb-3">
  <label for="price" class="form-label">Price</label>
  <input type="number" name="price" value="{{$info->price}}" class="form-control" id="price" placeholder="">
</div>

<div class="mb-3">
  <label for="pickup_date" class="form-label">Pickup Date</label>
  <input type="date" name="pickup_date" value="{{$info->pickup_date}}" class="form-control" id="pickup_date" placeholder="">
</div>

<div class="mb-3">
  <label for="pickup_time" class="form-label">Pickup Time</label>
  <input type="time" name="pickup_time" value="{{$info->pickup_time}}" class="form-control" id="pickup_time" placeholder="">
</div>
<div>
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
  </div>
  </div>
  </center>
</center>
@endsection