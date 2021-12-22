@extends('master')
@section('content')
<h1>Branch Details</h1>
   
<p>Branch Name: {{$branch->name}}</p>
<p>Branch Contact: {{$branch->contact}}</p>
<p>Branch Email: {{$branch->email}}</p>
<p>Branch Address: {{$branch->address}}</p>
<p>Branch City: {{$branch->city}}</p>
<p>Branch State: {{$branch->state}}</p>
<p>Branch Pincode: {{$branch->pincode}}</p>
<p>Branch Country: {{$branch->country}}</p>

@endsection