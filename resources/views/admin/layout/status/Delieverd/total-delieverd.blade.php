@extends('master')
@section('content')

<h1>Total Delieverd Courier</h1>


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
        <td>{{$d->track_number}}</td>
        <td>{{$d->user->name}}</td>
        <td>{{$d->recepient_name}}</td>
        <td>{{$d->delievery}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.deliever.details.view',$d->id)}}"><i class="fas fa-eye"></i></a>
            
            
        </td>
        @endforeach
   </tbody>
    @endsection