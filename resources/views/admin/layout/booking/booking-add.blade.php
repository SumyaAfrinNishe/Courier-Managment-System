@extends('master')
@section('content')
<h1> Add Courier</h1>

@if ($errors->any())
<div class="alert alert-warning" role="alert">

<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
</div>
@endif

<form action="{{route('admin.courier.record.create')}}" method='POST' enctype="multipart/form-data">
  @csrf

  
  <h4 style="background-color:DodgerBlue;color:white;">Sender Information</h4>

<div class="mb-3">
  <label for="sender_name" class="form-label">Sender Name</label>
  <input type="text" name="sender_name" class="form-control" id="sender_name" placeholder="">
</div>

<div class="mb-3">
  <label for="sender_contact" class="form-label">Sender Phone</label>
  <input type="number" name="sender_contact" class="form-control" id="sender_contact" placeholder="">
</div>

<div class="mb-3">
  <label for="sender_address" class="form-label">Sender Address</label>
  <input type="text" name="sender_address" class="form-control" id="sender_address" placeholder="">
</div>
<h4 style="background-color:DodgerBlue;color:white;">Receipient Information</h4>
<div class="mb-3">
  <label for="recepient_name" class="form-label">Recepient Name</label>
  <input type="text" name="recepient_name" class="form-control" id="recepient_name" placeholder="">
</div>

<div class="mb-3">
  <label for="recepient_phone" class="form-label">Recepient Phone</label>
  <input type="number" name="recepient_phone" class="form-control" id="recepient_phone" placeholder="">
</div>

<div class="mb-3">
  <label for="recepient_address" class="form-label">Recepient Address</label>
  <input type="text" name="recepient_address" class="form-control" id="recepient_address" placeholder="">
</div>
<h4 style="background-color:DodgerBlue;color:white;">Branch Information</h4>
<div class="mb-3">
  <label for="name" class="form-label">Branch Name</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="">
</div>

<div class="mb-3">
  <label for="address" class="form-label">Branch Address</label>c
  <input type="text" name="address" class="form-control" id="address" placeholder="">
</div>
<h4 style="background-color:DodgerBlue;color:white;">Courier Information</h4>

<div class="mb-3">
  <label for="consignment_no" class="form-label">Consignment No.</label>
  <input type="number" name="consignment_no" class="form-control" id="consignment_no" placeholder="">
</div>

<div class="mb-3">
  <label for="type_of_shipment" class="form-label">Type of Shipment</label>
  <input type="text" name="type_of_shipment" class="form-control" id="type_of_shipment" placeholder="">
</div>
<div class="mb-3">
  <label for="courier_description" class="form-label">Courier Description</label>
  <input type="text" name="courier_description" class="form-control" id="courier_description" placeholder="">
</div>
<div class="mb-3">
  <label for="quantity" class="form-label">Quantity</label>
  <input type="number" name="quantity" class="form-control" id="quantity" placeholder="">
</div>

<div class="mb-3">
  <label for="weight" class="form-label">Weight</label>
  <input type="number" name="weight" class="form-control" id="weight" placeholder="">
</div>
<div class="mb-3">
  <label for="price" class="form-label">Price</label>
  <input type="number" name="price" class="form-control" id="price" placeholder="">
</div>

<div class="mb-3">
  <label for="pickup_date" class="form-label">Pickup Date</label>
  <input type="date" name="pickup_date" class="form-control" id="pickup_date" placeholder="">
</div>

<div class="mb-3">
  <label for="pickup_time" class="form-label">Pickup Time</label>
  <input type="time" name="pickup_time" class="form-control" id="pickup_time" placeholder="">
</div>

<div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="status">Status: </label>

                            <input type="radio" class="btn-check" value="Accepted by Courier" name="status" id="Accepted By Courier" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="Accepted By Courier">Accepted By Courier</label>

                            <input type="radio" class="btn-check" value="Collected" name="status" id="Collected" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="Collected">Collected</label>

                            <input type="radio" class="btn-check" value="Ready to Pickup" name="status" id="Ready to Pickup" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="Ready to Pickup">Ready To Pickup</label>

                            <input type="radio" class="btn-check" value="Picked Up" name="status" id="Picked Up" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="Picked Up">Picked Up</label>

                            <input type="radio" class="btn-check" value="Out for Delievery" name="status" id="Out for Delievery" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="Out for Delievery">Out for Delievery</label>

                            <input type="radio" class="btn-check" value="Shipped" name="status" id="Shipped" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="Shipped">Shipped</label>

                            <input type="radio" class="btn-check" value="Intransit" name="status" id="Intransit" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="Intransit">Intransit</label>

                            <input type="radio" class="btn-check" value="Arrived At Destination" name="status" id="Arrived At Destination" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="Arrived At Destination">Arrived At Destination</label>

                            <input type="radio" class="btn-check" value="Delievered" name="status" id="Delievered" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="Delievered">Delieverd</label>
                            
                            <input type="radio" class="btn-check" value="Unsuccessful" name="status" id="Unsuccessful Delievery Attempt" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="Unsuccessful Delievery Attempt">Unsuccessful Delievery Attempt</label>

                            </div>

                            <!-- <div class="col-md-12">
                                <input class="form-control" type="number" id="quantity" name="quantity" placeholder="Quantity" required>
                            </div> -->


<div class="input-group">
  <div class="custom-file">
    <input type="file" name="image" class="custom-file-input" id="image" aria-describedby="inputGroupFileAddon04">
  </div>
</div>

<div>
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>

@endsection
