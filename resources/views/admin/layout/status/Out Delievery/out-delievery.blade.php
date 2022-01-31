@extends('master')
@section('content')

<h1>Total Out for Delievery</h1>


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
    @foreach($outdelievers as $key=>$outd)
        <td>{{$key+1}}</td>
        <td>{{$outd->track_number}}</td>
        <td>{{$outd->user->name}}</td>
        <td>{{$outd->recepient_name}}</td>
        <td>{{$outd->delievery}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.out.delievery.details.view',$outd->id)}}"><i class="fas fa-eye"></i></a>
            
            
        @endforeach
   </tbody>
    @endsection