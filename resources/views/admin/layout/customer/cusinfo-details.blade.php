@extends('master')
@section('content')


<div class="card">
  <div class="card-body">
    <h5 class="card-title">Customer Infromation Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/'.$info->image)}}" alt="booking">
        <p class="card-text" ><b style="color:blue">Customer Name: </b> {{$info->sender_name}}</p>
        <p class="card-text" ><b style="color:blue">Customer Contact:</b> {{$info->sender_email}}</p>
        <p class="card-text" ><b style="color:blue">Customer Address:</b> {{$info->sender_contact}}</p>
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
@endsection