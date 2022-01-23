@extends('master')
@section('content')
<a href="">
<h1>Customer Information</h1>
<a href="">
<table class="table table-bordered">
     <thead>
    <tr>
       
        <th scope="col">ID</th>
        <th scope="col">Sender Name</th> 
        <th scope="col">Recepient Name</th>
        <th scope="col">Branch Name</th>
        <th scope="col">Tracking Number</th>
        <!-- <th scope="col">Image</th> -->
        <th scope="col">Customer Decision</th>
        <th scope="col">Your Decision</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    
    <tbody>
        @foreach($customerinfolist as $key=>$info )
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$info->user->name}}</td>
        <td>{{$info->recepient_name}}</td>
        <td>{{$info->branch->name}}</td>
        <td>{{$info->track_number}}</td>
        <!-- <td>{{$info->cus_image}}</td> -->
        <td>{{$info->customer_decision}}</td>
        <td>{{$info->status}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.customer.details.view',$info->id)}}"><i class="fas fa-eye"></i></a>
            <!-- <a class="btn btn-warning" href="{{route('admin.customer.details.edit',$info->id)}}"><i class="fas fa-edit"></i></a> -->
            <a class="btn btn-danger" href="{{route('admin.customer.details.delete',$info->id)}}"><i class="fas fa-trash-alt"></i></a>
            <a class="btn btn-success" href="{{route('admin.customer.accept',$info->id)}}"><i class="fas fa-check-circle"></i></a>
            <a class="btn btn-danger" href="{{route('admin.customer.cancel',$info->id)}}"><i class="fas fa-times-circle"></i></a>
        </td>
        
</tr>
@endforeach
    </tbody>
</table>
@endsection