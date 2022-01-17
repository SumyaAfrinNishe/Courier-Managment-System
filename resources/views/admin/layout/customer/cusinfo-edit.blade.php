@extends('master')
@section('content')
<h1> Update Courier</h1>
@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

<form action="{{route('admin.customer.details.update',$info->id)}}" method='POST' enctype="multipart/form-data">
@method('PUT')
@csrf

<div class="mb-3">
  <label for="consignment_no" class="form-label">Consignment No.</label>
  <input type="number" name="consignment_no" class="form-control" id="consignment_no" placeholder="">
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

<div class="mb-3">
  <label for="status" class="form-label">Status</label>
  <input type="text" name="status" class="form-control" id="status" placeholder="">
</div>

<div>
<button type="submit" class="btn btn-success">Submit</button>
</div>
@endsection