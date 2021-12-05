@extends('master')
@section('content')
<h1>Courier Record</h1>
<a href="">
<table class="table">
     <thead>
    <tr>
        <!-- <th scope="col">SI No.</th>
        <th scope="col">Consignment No.</th> -->
        <th scope="col">ID</th>
        <th scope="col">Sender</th>
        <th scope="col">Recepient</th>
        <th scope="col">Consignment No.</th>
        <th scope="col">Pickup Date</th>
        <th scope="col">Pickup Time</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($courierrecordlist as $key=>$item )
    <tr>
       
        
        <td>{{$key+1}}</td>
        <td>{{$item->sender_name}}</td>
        <td>{{$item->recepient_name}}</td>
        <td>{{$item->consignment_no}}</td>
        <td>{{$item->pickup_date}}</td>
        <td>{{$item->pickup_time}}</td>
        <td> 
            <img src="{{url('/uploads/'.$item->image)}}" width="100px" alt="product image">
        </td>
        
       
</tr>
@endforeach
    </tbody>
</table>

@endsection
