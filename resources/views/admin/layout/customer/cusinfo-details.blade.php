@extends('master')
@section('content')


<div class="card">
  <div class="card-body">
    <h5 class="card-title">Customer Infromation Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$info->image)}}" alt="booking">
        <p class="card-text" ><b style="color:blue">Customer Name: </b> {{$info->user->name}}</p>
        <p class="card-text" ><b style="color:blue">Customer Contact:</b> {{$info->user->phone}}</p>
        <p class="card-text" ><b style="color:blue">Customer Address:</b> {{$info->user->email}}</p>
        <p class="card-text" ><b style="color:blue">Receipient Name: </b>{{$info->recepient_name}}</p>
        <p class="card-text" ><b style="color:blue">Recepient Phone:</b> {{$info->recepient_email}}</p>
        <p class="card-text" ><b style="color:blue">Recepient Address: </b>{{$info->recepient_phone}}</p>
        <p class="card-text" ><b style="color:blue">Branch Name:</b> {{$info->branch_name}}</p>
        <p class="card-text" ><b style="color:blue">Type of Shipment:</b> {{$info->type_of_shipment}}</p>
        <p class="card-text" ><b style="color:blue">Courier Description:</b> {{$info->courier_description}}</p>
        <p class="card-text" ><b style="color:blue">Courier Description:</b> {{$info->quantity}}</p>
        <p class="card-text" ><b style="color:blue">Price:</b> {{$info->price}}</p>
        <p class="card-text" ><b style="color:blue">Pickup Date:</b> {{$info->pickup_date}}</p>
        <p class="card-text" ><b style="color:blue">Pickup Time:</b> {{$info->pickup_time}}</p>
  </div>
 
  <form action="{{route('admin.customer.details.update',$info->id)}}" method='POST'>
  @method('PUT')
  @csrf
  <div class="dropdown" style="float:left;">
  <button class="dropbtn">Payment Status</button>
  <div class="dropdown-content" style="left:0;">
  <a href="{{route('admin.payment.paid',$info->id)}}">Paid</a>
  <a href="{{route('admin.payment.condition',$info->id)}}">Condition</a>
  
  </div>
</div>

<div class="dropdown" style="float:right;">
  <button class="dropbtn">Delivery Status</button>
  <div class="dropdown-content">
  <a href="{{route('admin.courier.accepted',$info->id)}}">Accepted By Courier</a>
  <a href="{{route('admin.status.collected',$info->id)}}">Courier Collected</a>
  <a href="{{route('admin.courier.ready.pickup',$info->id)}}">Ready To Pick Up</a>
  <a href="{{route('admin.courier.picked',$info->id)}}">Courier Picked Up</a>
  <a href="{{route('admin.courier.shipped',$info->id)}}">Shipped</a>
  <a href="{{route('admin.courier.intransit',$info->id)}}">In-Transit</a>
  <a href="{{route('admin.courier.arrived.destination',$info->id)}}">Arrived At Destination</a>
  <a href="{{route('admin.courier.out.for.delievery',$info->id)}}">Out For Delievery</a>
  <a href="{{route('admin.courier.deliverd',$info->id)}}">Delieverd </a>
  <a href="{{route('admin.courier.unsuccessful',$info->id)}}">Unsuccessful Delievery Attempt</a>
  
  </div>
</div>
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
  right: 0;
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

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>


<div>
<button type="submit" class="btn btn-success">Submit</button>
</div>

</form>
@endsection