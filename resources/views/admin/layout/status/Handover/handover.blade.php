@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Courier Handover</title>
</head>
<body>
<div class="container">
<h1>Courier Handover</h1>


    <table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Consignment No.</th>
        <th scope="col">Sender</th>
        <th scope="col">Recepient</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($handover as $key=>$ho)
        <td>{{$key+1}}</td>
        <td>{{$ho->track_number}}</td>
        <td>{{$ho->user->name}}</td>
        <td>{{$ho->recepient_name}}</td>
        <td>{{$ho->delievery}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.handover.details.view',$ho->id)}}"><i class="fas fa-eye"></i></a>
            
        </td>
        @endforeach
   </tbody>
   </table>
</div>
</body>
</html>
    @endsection