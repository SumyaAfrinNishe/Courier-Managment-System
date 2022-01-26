<!-- //table header start -->
@extends('frontend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Your Courier Request</h2>
             
  <table class="table table-hover">
    <thead>
      <tr>
      <th scope="col">Your Name</th>
      <th scope="col">Receipient Name</th>
      <th scope="col">Tracking Number</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Take Decision</th>
      <!-- <th scope="col">Action</th> -->
      </tr>
    </thead>
    <tbody>
    @foreach($customerinfolist as $key=>$info )
    <tr>
        <td>{{$info->user->name}}</td>
        <td>{{$info->recepient_name}}</td>
        @if($info->status == 'approved')
           <td><b style="color:green">{{$info->track_number}}</b></td>
         @else
           <td>Wait</td>  
         @endif  
        <td>{{$info->status}}</td>
        <td>{{$info->price}}</td>
        @if($info->customer_decision != 'Cancelled')
        <td>
     <a class="btn btn-warning" href="{{route('admin.payment.paid',$info->id)}}">Paid</i></a>
     <a class="btn btn-danger" href="{{route('admin.payment.condition',$info->id)}}">Condition</i></a>
      </td>
      @else
      <td>You are disabled to take action</td>
      @endif

        <!-- <td>{{$info->customer_decision}}</td> -->
        @if($info->status == 'approved' && $info->customer_decision != 'Cancelled')
          
          <td>

        <a class="btn btn-warning" href="{{route('admin.customer.change.price',$info->id)}}">Change Prize</i></a>
        <a class="btn btn-success" href="{{route('admin.customer.confirm',$info->id)}}">Confirm</i></a> <br>
        
        </td>
          @else
          <td>Please Wait Your Request is Processing</td>
        @endif

        @if($info->customer_decision != 'Cancelled')
<td>
<a class="btn btn-danger" href="{{route('admin.customer.confirm.cancel',$info->id)}}">Cancel</i></a>
<a class="btn btn-info" href="{{route('customer.edit.information',$info->id)}}">Update Information</i></a>
</td>
@else
<td><b style="color:red">Successfully, cancel your request</b></td>
@endif
    </tr>
    
  @endforeach 
    </tbody>
  </table>
</div>

</body>
</html>
@endsection