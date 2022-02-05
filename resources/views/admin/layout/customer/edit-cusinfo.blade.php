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
  @if($info->payment=='Paid')
  <a href="{{route('admin.courier.handover',$info->id)}}" style="text-decoration: none;">Handover </a>
  @endif
  <a href="{{route('admin.courier.unsuccessful',$info->id)}}" style="text-decoration: none;">Unsuccessful Delievery Attempt</a>
  
  </div>
  <div>
</div>
  </center>
  <center>
  <!-- <div class="mb-3">
  <label for="price" class="form-label">Price</label>
  <input type="number" name="price" value="{{$info->price}}" class="form-control" id="price" placeholder="">
</div> -->
@if(session('success'))
    <div class="alert alert-success">
        {!! session('success') !!}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {!! session('error') !!}
</div>
@endif

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
@endsection