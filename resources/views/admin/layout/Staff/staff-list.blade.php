@extends('master')
@section('content')
<h1>Staff List</h1>
<a href="">
<table class="table">
     <thead>
    <tr>
        <!-- <th scope="col">SI No.</th>
        <th scope="col">Consignment No.</th> -->
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Branch</th>
    </tr>
    </thead>
    <tbody>
        <!-- @foreach($courierrecordlist as $key=>$book ) -->
    <tr>
       
        
        <td>{{$key+1}}</td>
        <td>{{$book->sender_name}}</td>
        <td>{{$book->recepient_name}}</td>
        <td>{{$book->consignment_no}}</td>
</tr>
<!-- @endforeach -->
    </tbody>
</table>

@endsection