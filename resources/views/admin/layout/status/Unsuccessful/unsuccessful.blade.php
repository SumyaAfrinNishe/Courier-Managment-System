@extends('master')
@section('content')

<h1>Unsuccessful Delievery Attempt!!!</h1>
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
        @foreach($unsuccesfuls as $key=>$unsu)
        <td>{{$key+1}}</td>
        <td>{{$unsu->consignment_no}}</td>
        <td>{{$unsu->sender_name}}</td>
        <td>{{$unsu->recepient_name}}</td>
        <td>{{$unsu->status}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.unsuccessful.details.view',$unsu->id)}}"><i class="fas fa-eye"></i></a>
        </td>
        @endforeach
    </tbody>
        
        @endsection