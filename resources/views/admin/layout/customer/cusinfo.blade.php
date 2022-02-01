@extends('master')
@section('content')

<div class="container">
<h1>Customer Information</h1>
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
<form action="{{route('admin.customer.info')}}" method="GET">
    <input name="search" class="search-input" type="text" class="form-control" placeholder="Search with Customer Name" aria-label="Search">
    <button class="btn btn-success" type="submit"><i class='fas fa-search'></i></button>
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
        <th scope="col">Tracking Number</th>
        <th scope="col">Delivery Type</th>
        <th scope="col">Payment Status</th>
        <th scope="col">Payment Action</th>
        <th scope="col">Customer Decision</th>
        <th scope="col">Your Decision</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    
    <tbody>
        @foreach($customerinfolist as $key=>$info )
    <tr> 
        <td>{{$key+1}}</td>
        <td><img src="{{url('/uploads/'.$info->cus_image)}}" width="100px" alt="courier image"></td>
        <td>{{$info->user->name}}</td>
        <td>{{$info->recepient_name}}</td>
        <td>{{$info->frombranch->name}}</td>
        <td>{{$info->tobranch->name}}</td>
        <td>{{$info->track_number}}</td>
        <td>{{$info->delitype}}</td>
        <td>{{$info->payment}}</td>
        @if($info->payment=='Pending')
        <td><a class="btn btn-warning" href="{{route('admin.add.payment',$info->id)}}">Add Payment</a></td>
        @else
        <td><b style="color:green">Already Paid<b></td>
        @endif
        <td>{{$info->customer_decision}}</td>
        <td>{{$info->status}}</td>
        @if($info->payment=='Paid')
        <td><a class="btn btn-primary" href="{{route('admin.customer.details.view',$info->id)}}"><i class="fas fa-eye"></i></a></td>
        @else
        <td> <b style="color:red">Pay First</b> </td>
        @endif
<td>
            <!-- <a class="btn btn-warning" href="{{route('admin.customer.details.edit',$info->id)}}"><i class="fas fa-edit"></i></a> -->
<a class="btn btn-secondary" href="{{route('admin.customer.details.delete',$info->id)}}"><i class="fas fa-trash-alt"></i></a>
</td>

<td><a class="btn btn-success" href="{{route('admin.customer.accept',$info->id)}}"><i class="fas fa-check-circle"></i></a></td>
<td><a class="btn btn-danger" href="{{route('admin.customer.cancel',$info->id)}}"><i class="fas fa-times-circle"></i></a></td>

        
</tr>
@endforeach
    </tbody>
</table>
</div>
@endsection