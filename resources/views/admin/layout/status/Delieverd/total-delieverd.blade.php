@extends('master')
@section('content')

<h1>Total Delieverd Courier</h1>
<a href="">

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
    @foreach($delievers as $key=>$d)
        <td>{{$key+1}}</td>
        <td>{{$d->consignment_no}}</td>
        <td>{{$d->sender_name}}</td>
        <td>{{$d->recepient_name}}</td>
        <td>{{$d->status}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.deliever.details.view',$d->id)}}"><i class="fas fa-eye"></i></a>
            
            
        </td>
        @endforeach
   </tbody>
    @endsection