@extends('master')
@section('content')
<h1> Add Branch</h1>
@if(session('success'))
    <div class="alert alert-success">
        {!! session('success') !!}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {!! session('error') !!}
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

<!-- @extends('master')
@section('content')
<html>
    <head> 
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #0C4160;
    padding: 30px 10px
}

.card {
    max-width: 500px;
    margin: auto;
    color: black;
    border-radius: 20 px
}

p {
    margin: 0px
}

.container .h8 {
    font-size: 30px;
    font-weight: 800;
    text-align: center
}

.btn.btn-primary {
    width: 100%;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 15px;
    background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%);
    border: none;
    transition: 0.5s;
    background-size: 200% auto
}

.btn.btn.btn-primary:hover {
    background-position: right center;
    color: #fff;
    text-decoration: none
}

.btn.btn-primary:hover .fas.fa-arrow-right {
    transform: translate(15px);
    transition: transform 0.2s ease-in
}

.form-control {
    color: white;
    background-color: #223C60;
    border: 2px solid transparent;
    height: 60px;
    padding-left: 20px;
    vertical-align: middle
}

.form-control:focus {
    color: white;
    background-color: #0C4160;
    border: 2px solid #2d4dda;
    box-shadow: none
}

.text {
    font-size: 14px;
    font-weight: 600
}

::placeholder {
    font-size: 14px;
    font-weight: 600
}
</style>

        
</head>
<body>

<div class="container p-0">
    <div class="card px-4">
        <p class="h8 py-3">Add Branch</p>
        <form action="{{route('admin.branch.list.create')}}" method='POST' enctype="multipart/form-data">
            @csrf
        <div class="row gx-3">
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Branch Name</p> 
                    <input class="form-control mb-3" name="name" type="text" placeholder="Branch Name" value="">
                </div>
            </div>
           
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Branch Contact Number</p>
                     <input class="form-control mb-3" name="contact" type="number" placeholder="Branch Contact Number">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Branch Email</p> 
                    <input class="form-control mb-3 pt-2 " name="email" type="email" placeholder="Branch Email">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Branch Address</p> 
                    <input class="form-control mb-3 pt-2 " name="address" type="text" placeholder="Branch Address">
                </div>
            </div>
           
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Branch City</p> 
                    <input class="form-control mb-3 pt-2 " name="city" type="text" placeholder="Branch City">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Branch state</p> 
                    <input class="form-control mb-3 pt-2 " name="state" type="text" placeholder="Branch State">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Branch Pincode</p> 
                    <input class="form-control mb-3 pt-2 " name="pincode" type="number" placeholder="Branch Pincode">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Branch Country</p> 
                    <input class="form-control mb-3 pt-2 " name="country" type="text" placeholder="Branch Country">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Branch Image</p> 
                    <input class="form-control mb-3 pt-2 " name="image" type="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" placeholder="Branch Country">
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary mb-3" type="submit"> <span class="ps-3">Paid</span> <span class="fas fa-arrow-right"></span> </button>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
@endsection -->