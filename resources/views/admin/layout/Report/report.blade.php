@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Report Generate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Date Wise</h2>
  <!-- <p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p> -->
  <form class="form-inline" action="{{route('admin.report.show')}}">
    <div class="form-group">
      <label for="date">From Date:</label>
      <input type="date" class="form-control" id="fromdate" placeholder="From Date" name="fromdate">
    </div>
    <div class="form-group">
      <label for="date">To Date:</label>
      <input type="date" class="form-control" id="todate" placeholder="To Date" name="todate">
    </div>

    <button type="submit" class="btn btn-default">Search</button>
  </form>
  <table class="table table-bordered">
  <thead>
    <tr>
       
        <th scope="col">ID</th>
        <th scope="col">Image</th> 
        <th scope="col">Sender Name</th> 
        <th scope="col">Recepient Name</th>
        <th scope="col">From Branch Name</th>
        <th scope="col">To Branch Name</th>
        
</tr>
</thead>
<tbody>
        @foreach($reports as $key=>$rep )
    <tr>
        <td>{{$key+1}}</td>
        <td><img src="{{url('/uploads/'.$rep->cus_image)}}" width="100px" alt="courier image"></td>
        <td>{{$rep->user->name}}</td>
        <td>{{$rep->recepient_name}}</td>
        <td>{{$rep->frombranch->name}}</td>
        <td>{{$rep->tobranch->name}}</td>
</tr>
@endforeach
</tbody>

</div>

</body>
</html>
@endsection