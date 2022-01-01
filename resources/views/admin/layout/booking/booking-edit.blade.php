@extends('master')
@section('content')
<h1> Edit Booking</h1>
@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif
<form action="{{route('admin.booking.update',$book->id)}}" method='POST' enctype="multipart/form-data">
@method('PUT')
@csrf
<div class="mb-3">
  <label for="sender_name" class="form-label">Sender Name</label>
  <input type="text" name="sender_name" value="{{$book->sender_name}}" class="form-control" id="sender_name" placeholder="">
</div>

<div class="mb-3">
  <label for="sender_contact" class="form-label">Sender Phone</label>
  <input type="number" name="sender_contact" value="{{$book->sender_contact}}" class="form-control" id="sender_contact" placeholder="">
</div>

<div class="mb-3">
  <label for="sender_address" class="form-label">Sender Address</label>
  <input type="text" name="sender_address" value="{{$book->sender_address}}" class="form-control" id="sender_address" placeholder="">
</div>

<div class="mb-3">
  <label for="recepient_name" class="form-label">Recepient Name</label>
  <input type="text" name="recepient_name" value="{{$book->recepient_name}}" class="form-control" id="recepient_name" placeholder="">
</div>

<div class="mb-3">
  <label for="recepient_phone" class="form-label">Recepient Phone</label>
  <input type="number" name="recepient_phone" value="{{$book->recepient_phone}}" class="form-control" id="recepient_phone" placeholder="">
</div>

<div class="mb-3">
  <label for="recepient_address" class="form-label">Recepient Address</label>
  <input type="text" name="recepient_address" value="{{$book->recepient_address}}" class="form-control" id="recepient_address" placeholder="">
</div>
<div class="mb-3">
  <label for="name" class="form-label">Branch Name</label>
  <input type="text" name="name" value="{{$book->name}}" class="form-control" id="name" placeholder="">
</div>

<div class="mb-3">
  <label for="address" class="form-label">Branch Address</label>c
  <input type="text" name="address" value="{{$book->address}}" class="form-control" id="address" placeholder="">
</div>
<div class="mb-3">
  <label for="consignment_no" class="form-label">Consignment No.</label>
  <input type="number" name="consignment_no" value="{{$book->consignment_no}}" class="form-control" id="consignment_no" placeholder="">
</div>

<div class="mb-3">
  <label for="type_of_shipment" class="form-label">Type of Shipment</label>
  <input type="text" name="type_of_shipment" value="{{$book->type_of_shipment}}" class="form-control" id="type_of_shipment" placeholder="">
</div>
<div class="mb-3">
  <label for="courier_description" class="form-label">Courier Description</label>
  <input type="text" name="courier_description" value="{{$book->courier_description}}" class="form-control" id="courier_description" placeholder="">
</div>
<div class="mb-3">
  <label for="quantity" class="form-label">Quantity</label>
  <input type="number" name="quantity" value="{{$book->quantity}}" class="form-control" id="quantity" placeholder="">
</div>

<div class="mb-3">
  <label for="weight" class="form-label">Weight</label>
  <input type="number" name="weight" value="{{$book->weight}}" class="form-control" id="weight" placeholder="">
</div>

<div class="mb-3">
  <label for="price" class="form-label">Price</label>
  <input type="number" name="price" value="{{$book->price}}" class="form-control" id="price" placeholder="">
</div>

<div class="mb-3">
  <label for="pickup_date" class="form-label">Pickup Date</label>
  <input type="date" name="pickup_date" value="{{$book->pickup_date}}" class="form-control" id="pickup_date" placeholder="">
</div>

<div class="mb-3">
  <label for="pickup_time" class="form-label">Pickup Time</label>
  <input type="time" name="pickup_time" value="{{$book->pickup_time}}" class="form-control" id="pickup_time" placeholder="">
</div>

<div class="mb-3">
  <label for="status" class="form-label">Status</label>
  <input type="text" name="status" value="{{$book->status}}" class="form-control" id="status" placeholder="">
</div>

<div class="input-group">
  <div class="custom-file">
    <input type="file" name="image" value="{{$book->image}}" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
  </div>
</div>

<div>
<button type="submit" class="btn btn-success">Submit</button>
</div>
@endsection