@extends('master')
@section('content')

<h1>Total Out for Delievery</h1>
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
    @foreach($outdelievers as $key=>$outd)
        <td>{{$key+1}}</td>
        <td>{{$outd->consignment_no}}</td>
        <td>{{$outd->sender_name}}</td>
        <td>{{$outd->recepient_name}}</td>
        <td>{{$outd->status}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.out.delievery.details.view',$outd->id)}}"><i class="fas fa-eye"></i></a>
            <a class="btn btn-warning" href="{{route('admin.out.delievery.edit',$outd->id)}}"><i class="fas fa-edit"></i></a>
            
        @endforeach
   </tbody>
    @endsection