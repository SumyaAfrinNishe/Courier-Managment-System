@extends('master')
@section('content')

<h1>Total Courier Arrived at Destination</h1>


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
    
    @foreach($arrives as $key=>$arrd)
        <td>{{$key+1}}</td>
        <td>{{$arrd->track_number}}</td>
        <td>{{$arrd->user->name}}</td>
        <td>{{$arrd->recepient_name}}</td>
        <td>{{$arrd->delievery}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.arrived.details.view',$arrd->id)}}"><i class="fas fa-eye"></i></a>
            
        </td>
        @endforeach
   </tbody>
    @endsection