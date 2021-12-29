@extends('master')
@section('content')
<h1>Staff Details</h1>
<p>
<img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$staff->staffimage)}}" alt="staff">
</p>
<p>Staff Name: {{$staff->staffname}}</p>
<p>Staff Email: {{$staff->staffemail}}</p>
<p>Staff Contact: {{$staff->staffcontact}}</p>
<p>Staff's Branch: {{$staff->staffbranch}}</p>

@endsection