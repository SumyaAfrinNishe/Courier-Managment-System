@extends('master')
@section('content')

<h1>Courier Collected</h1>

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
    
    @foreach($collects as $key=>$collect)
        <td>{{$key+1}}</td>
        <td>{{$collect->consignment_no}}</td>
        <td>{{$collect->sender_name}}</td>
        <td>{{$collect->recepient_name}}</td>
        <td>{{$collect->status}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.collect.details.view',$collect->id)}}"><i class="fas fa-eye"></i></a>
            <a class="btn btn-warning" href="{{route('admin.collect.edit',$collect->id)}}"><i class="fas fa-edit"></i></a>
            
        </td>
        @endforeach
   </tbody>
    @endsection