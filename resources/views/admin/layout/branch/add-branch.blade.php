@extends('master')
@section('content')
<h1> Add Branch</h1>
@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif
@if ($errors->any())
<div class="alert alert-warning" role="alert">

<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
</div>
@endif
<div class="card mt-3">
  <div class="container p-5">
<form action="{{route('admin.branch.list.create')}}" method='POST' enctype="multipart/form-data">
  
@csrf
<div class="mb-3">
  <label for="name" class="form-label">Branch Name</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="">
</div>
<div class="mb-3">
  <label for="contact" class="form-label">Branch Contact Number</label>
  <input type="text" name="contact" class="form-control" id="contact" placeholder="">
</div>
<div class="mb-3">
  <label for="email" class="form-label">Branch Email</label>
  <input type="text" name="email" class="form-control" id="email" placeholder="">
</div>
<div class="mb-3">
  <label for="address" class="form-label">Branch Address</label>
  <input type="text" name="address" class="form-control" id="address" placeholder="">
</div>
<div class="mb-3">
  <label for="city" class="form-label">Branch City</label>
  <input type="text" name="city" class="form-control" id="city" placeholder="">
</div>
<div class="mb-3">
  <label for="state" class="form-label">Branch State</label>
  <input type="text" name="state" class="form-control" id="state" placeholder="">
</div>
<div class="mb-3">
  <label for="pincode" class="form-label">Branch Pincode</label>
  <input type="text" name="pincode" class="form-control" id="pincode" placeholder="">
</div>
<div class="mb-3">
  <label for="country" class="form-label">Branch Country</label>
  <input type="text" name="country" class="form-control" id="country" placeholder="">
</div>
<div class="input-group">
  <div class="custom-file">
    <input type="file" name="image" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
  </div>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</div>
@endsection

<!-- <!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Add Branch</h3>
@if ($errors->any())
<div class="alert alert-warning" role="alert">

<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
</div>
@endif
<div>
  <form action="{{route('admin.branch.list.create')}}" method='POST' enctype="multipart/form-data">
    @csrf
    <label for="fname">Branch Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Branch Contact Number</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Branch City</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    
    <label for="lname">Branch State</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    
    <label for="lname">Branch Pincode</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Branch Country</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <div class="input-group">
  <div class="custom-file">
    <input type="file" name="image" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
  </div>
</div> -->
    <!-- <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select> -->
  
    <!-- <input type="submit" class="btn btn-success" value="Submit">
  </form>
</div>

</body>
</html> -->


