@extends('master')
@section('content')
<a href="">
<h1>Customer Information</h1>
<a href="">
<table class="table table-bordered">
     <thead>
    <tr>
        <!-- <th scope="col">SI No.</th>
        <th scope="col">Consignment No.</th> -->
        <th scope="col">ID</th>
        <th scope="col">Sender Name</th>
        <!-- <th scope="col">Sender Email</th>
        <th scope="col">Sender Contact</th> -->
        <th scope="col">Recepient Name</th>
        <!-- <th scope="col">Recepient Email</th>
        <th scope="col">Recepient Contact</th> -->
        <th scope="col">Branch Name</th>
        <th scope="col">Type</th>
        <!-- <th scope="col">Description</th> -->
        <th scope="col">Quantity</th>
        <th scope="col">Weight</th>
        <th scope="col">Image</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($customerinfolist as $key=>$info )
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$info->sender_name}}</td>
        <!-- <td>{{$info->sender_email}}</td>
        <td>{{$info->sender_contact}}</td> -->
        <td>{{$info->recepient_name}}</td>
        <!-- <td>{{$info->recepient_email}}</td>
        <td>{{$info->recepient_phone}}</td> -->
        <td>{{$info->branch_name}}</td>
        <td>{{$info->type_of_shipment}}</td>
        <!-- <td>{{$info->courier_description}}</td> -->
        <td>{{$info->quantity}}</td>
        <td>{{$info->weight}}</td>
        <td>{{$info->image}}</td>
        <td>{{$info->status}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.customer.details.view',$info->id)}}"><i class="fas fa-eye"></i></a>
            <a class="btn btn-warning" href="{{route('admin.customer.details.edit',$info->id)}}"><i class="fas fa-edit"></i></a>
            <a class="btn btn-danger" href="{{route('admin.customer.details.delete',$info->id)}}"><i class="fas fa-trash-alt"></i></a>
            <a class="btn btn-success" href="{{route('admin.customer.accept',$info->id)}}"><i class="fas fa-check-circle"></i></a>
            <a class="btn btn-danger" href="{{route('admin.customer.cancel',$info->id)}}"><i class="fas fa-times-circle"></i></a>
        </td>
        
</tr>
@endforeach
    </tbody>
</table>
@endsection