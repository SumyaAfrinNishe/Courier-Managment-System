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
             
  <table class="table table-hover">
    <thead>
      <tr>
      <th scope="col">Your Name</th>
      <th scope="col">Receipient Name</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Take Decision</th>
      </tr>
    </thead>
    <tbody>
    @foreach($customerinfolist as $key=>$info )
    <tr>
      
        <td>{{$info->user->name}}</td>
        <td>{{$info->recepient_name}}</td>
        <td>{{$info->status}}</td>
        <td>{{$info->price}}</td>
             
        @if($info->customer_decision != 'Cancelled')
<td>
<a class="btn btn-danger" href="{{route('admin.customer.confirm.cancel',$info->id)}}">Cancel Request</i></a>
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