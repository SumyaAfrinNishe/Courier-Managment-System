@extends('master')
@section('content')
<h1>Courier Record</h1>

<form action="{{route('admin.booking.search')}}" method="GET">
    <input name="search" class="search-input" type="text" placeholder="Search with Consignment" aria-label="Search">
    <button class="btn btn-success" type="submit">Search</button>
</form>

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
        @foreach($courierrecordlist as $key=>$book )
    <tr>
       
        
        <td>{{$book+1}}</td>
        <td>{{$book->sender_name}}</td>
        <td>{{$book->recepient_name}}</td>
        <td>{{$book->consignment_no}}</td>
        <td>{{$book->pickup_date}}</td>
        <td>{{$book->pickup_time}}</td>
        <td> 
            <img src="{{url('/uploads/'.$book->image)}}" width="100px" alt="product image">
        </td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.bookingdetails.view',$book->id)}}"><i class="fas fa-eye"></i></a>
            <a class="btn btn-warning" href="{{route('admin.booking.edit',$book->id)}}"><i class="fas fa-edit"></i></a>
            <a class="btn btn-danger" href="{{route('admin.bookingdetails.delete',$book->id)}}"><i class="fas fa-trash-alt"></i></a>
        </td>
        
       
</tr>
@endforeach
    </tbody>
</table>

@endsection
