@extends('master')
@section('content')

<h1 style="text-align:center;">Ready To Pickup</h1>


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
    
    @foreach($readypickups as $key=>$rp)
        <td>{{$key+1}}</td>
        <td>{{$rp->track_number}}</td>
        <td>{{$rp->user->name}}</td>
        <td>{{$rp->recepient_name}}</td>
        <td>{{$rp->delievery}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.readypickup.details.view',$rp->id)}}"><i class="fas fa-eye"></i></a>

            
        </td>
        @endforeach
   </tbody>
    @endsection