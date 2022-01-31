@extends('master')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<center>
<h1>Your Product Details</h1>
<center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>


</center>
<div id="PrintTableArea">
<p><h3 style="color:DodgerBlue">Tracking Number:{{$ho->track_number}}</span></h3><h2><span style="color:#2874A6"></span><h2></p>
        <p class="card-text" ><b style="color:#2E4053;">Your Name:</b> {{$ho->user->name}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Your Contact:</b>{{$ho->user->phone}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Your Address:</b>{{$ho->user->email}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Receipient Name:</b>{{$ho->recepient_name}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Recepient Phone:</b>{{$ho->recepient_phone}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Recepient Address:</b>{{$ho->recepient_email}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Branch Name:</b>{{$ho->branch_name}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Type of Shipment:</b>{{$ho->type_of_shipment}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Description:</b>{{$ho->courier_description}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Quantity:</b>{{$ho->quantity}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Weight:</b>{{$ho->weight}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Price:</b>{{$ho->price}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Pickup Date:</b>{{$ho->pickup_date}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Pickup Time:</b>{{$ho->pickup_time}}</p>
<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$ho->image)}}" alt="post">
</p>
<p><h4><span style="color:red">Delivery Status:{{$ho->delievery}}</span></h4></p>
</center>
</div>
<center>
        <form action="{{route('admin.accept.update.status',$ho->id)}}" method='POST' enctype="multipart/form-data">
         @method('PUT')
         @csrf
        <p class="card-text" style="margin-top: 900px" >Status:</p>
        <select class="form-select" aria-label="Default select example" name="delievery">
        <option selected>{{$ho->delievery}}</option>
        <option value="Accepted By Courier">Accepted By Courier</option>
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
</center>
  </div>
</div>
</center>

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