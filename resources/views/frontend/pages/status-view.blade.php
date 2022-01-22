<!-- //table header start -->
@extends('frontend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<style>
 body{
  
    background: linear-gradient(to left, #ccccff 45%, #ccffff 95%);
 }
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  .heading h2{
    text-align: center;
  }
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #ccccff;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: rgb(9, 24, 68);
    color: white;
  }
   /* button design */
   .btn {
  background-color: rgb(131, 157, 235);
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
/* Darker background on mouse-over */
.btn:hover {
  background-color: rgb(5, 31, 109);
}
  </style>
  </head>

  <div class="heading">
    <h2>Your Courier Request</h2>
  </div>
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
        <td>{{$info->user->name}}</td>
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
          <td>Now, you are disabled to take action</td>
         @else
         <td>

        
        <a class="btn btn-success" href="{{route('admin.customer.confirm',$info->id)}}">Confirm</i></a>
        <a class="btn btn-danger" href="{{route('admin.customer.confirm.cancel',$info->id)}}">Cancel</i></a>
        </td> 

        @endif
    </tr>
  @endforeach 

</tbody>
<body>
</table>
@endsection
