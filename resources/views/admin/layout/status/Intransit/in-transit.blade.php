@extends('master')
@section('content')

<h1>In-Transit</h1>
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
        @foreach($intransits as $key=>$intra)
        <td>{{$key+1}}</td>
        <td>{{$intra->consignment_no}}</td>
        <td>{{$intra->sender_name}}</td>
        <td>{{$intra->recepient_name}}</td>
        <td>{{$intra->status}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.intransit.details.view',$intra->id)}}"><i class="fas fa-eye"></i></a>
            <a class="btn btn-warning" href="{{route('admin.intransit.edit',$intra->id)}}"><i class="fas fa-edit"></i></a>
        </td>
        @endforeach
    </tbody>
        
        @endsection