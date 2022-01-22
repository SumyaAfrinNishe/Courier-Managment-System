@extends('master')
@section('content')
<<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<center>
<h1>Your Product Details</h1>
<center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>


</center>
<div id="PrintTableArea">
<p><h3 style="color:DodgerBlue">Tracking Number:{{$arrd->track_number}}</span></h3><h2><span style="color:#2874A6"></span><h2></p>
        <p class="card-text" ><b style="color:#2E4053;">Sender Name:</b> {{$arrd->user->name}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Sender Contact:</b>{{$arrd->user->phone}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Sender Address:</b>{{$arrd->user->email}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Receipient Name:</b>{{$arrd->recepient_name}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Recepient Phone:</b>{{$arrd->recepient_phone}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Recepient Address:</b>{{$arrd->recepient_email}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Branch Name:</b>{{$arrd->branch_name}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Type of Shipment:</b>{{$arrd->type_of_shipment}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Description:</b>{{$arrd->courier_description}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Quantity:</b>{{$arrd->quantity}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Weight:</b>{{$arrd->weight}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Price:</b>{{$arrd->price}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Pickup Date:</b>{{$arrd->pickup_date}}</p>
        <p class="card-text" ><b style="color:#2E4053;">Pickup Time:</b>{{$arrd->pickup_time}}</p>
<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$arrd->image)}}" alt="post">
</p>
<p><h4><span style="color:red">Delivery Status:{{$arrd->delievery}}</span></h4></p>
</center>
</div>
        <form action="{{route('admin.arrived.update.status',$arrd->id)}}" method='POST' enctype="multipart/form-data">
         @method('PUT')
         @csrf

        <p class="card-text" >Status:</p>
        <select class="form-select" aria-label="Default select example" name="delievery">
        <option selected>{{$arrd->delievery}}</option>
        <option value="Accepted By Courier">Accepted By Courier</option>
        <option value="Collected">Collected</option>
        <option value="Ready to Pickup">Ready to Pickup</option>
        <option value="Picked Up">Picked Up</option>
        <option value="Out for Delievery">Out for Delievery</option>
        <option value="Shipped">Shipped</option>
        <option value="Intransit">Intransit</option>
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