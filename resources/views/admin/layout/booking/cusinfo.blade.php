@extends('master')
@section('content')
<a href="">
<h1>Customer Information</h1>
<a href="">
<table class="table table-bordered">
     <thead>
    <tr>
        <!-- <th scope="col">SI No.</th>
        <th scope="col">Consignment No.</th> -->
        <th scope="col">ID</th>
        <th scope="col">Sender Name</th>
        <th scope="col">Recepient Name</th>
        <th scope="col">Type</th>
        <th scope="col">Quantity</th>
        <th scope="col">Branch</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($customerinfolist as $key=>$info )
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$info->yourname}}</td>
        <td>{{$info->receivername}}</td>
        <td>{{$info->type}}</td>
        <td>{{$info->quantity}}</td>
        <td>{{$info->branchname}}</td>
        
</tr>
@endforeach
    </tbody>
</table>
@endsection