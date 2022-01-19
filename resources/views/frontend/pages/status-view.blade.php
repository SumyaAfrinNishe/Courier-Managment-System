<!-- //table header start -->
@extends('frontend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>See Your Status</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
<!-- //table header end -->

<h4>Your Courier Status</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Your Name</th>
      <th scope="col">Receipient Name</th>
      <th scope="col">Tracking Number</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Delivery Status</th>
      <th scope="col">Take Decision</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customerinfolist as $key=>$info )
    <tr>
        <td>{{$info->sender_name}}</td>
        <td>{{$info->recepient_name}}</td>
        @if($info->customer_decision == 'Confirmed')

           <td>{{$info->track_number}}</td>
         @else
           <td> </td>  
         @endif  
        <td>{{$info->status}}</td>
        <td>{{$info->price}}</td>
        <td>{{$info->payment}}</td>
        <td>{{$info->delievery}}</td>

        <td>{{$info->customer_decision}}</td>
        @if($info->customer_decision == 'Cancelled')
          <td></td>
         @else
         <td>

        
        <a class="btn btn-success" href="{{route('admin.customer.confirm',$info->id)}}">Confirm</i></a>
        <a class="btn btn-danger" href="{{route('admin.customer.confirm.cancel',$info->id)}}">Cancel</i></a>
        </td> 

        @endif
    </tr>
  @endforeach 

</tbody>
</table>

<!-- //table footer start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
@endsection
<!-- //table footer end -->