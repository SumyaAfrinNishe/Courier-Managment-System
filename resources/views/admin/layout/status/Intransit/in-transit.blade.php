@extends('master')
@section('content')

<h1>In-Transit</h1>


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
        @foreach($intransits as $key=>$intra)
        <td>{{$key+1}}</td>
        <td>{{$intra->track_number}}</td>
        <td>{{$intra->user->name}}</td>
        <td>{{$intra->recepient_name}}</td>
        <td>{{$intra->delievery}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.intransit.details.view',$intra->id)}}"><i class="fas fa-eye"></i></a>
        </td>
        @endforeach
    </tbody>
        
        @endsection