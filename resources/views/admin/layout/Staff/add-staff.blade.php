@extends('master')
@section('content')
<h1 style="text-align:center;"> Add Staff</h1>
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
<form action="{{route('admin.staff.create')}}" method='POST' enctype="multipart/form-data">
    @csrf
<div class="mb-3">
  <label for="staffname" class="form-label">Name</label>
  <input type="text" name="staffname" class="form-control" id="staffname" placeholder="">
</div>

<div class="mb-3">
  <label for="staffcontact" class="form-label">Contact</label>
  <input type="text" name="staffcontact" class="form-control" id="staffcontact" placeholder="">
</div>

<div class="mb-3">
  <label for="staffemail" class="form-label">Email</label>
  <input type="text" name="staffemail" class="form-control" id="staffemail" placeholder="">
</div>

<div class="mb-3">
  <label for="staffpassword" class="form-label">Password</label>
  <input type="password" name="staffpassword" class="form-control" id="staffpassword" placeholder="">
</div>


<select id="name" name="staffbranch">
                               <option selected> Branch Name </option>
                              @foreach ($branch as $sbranch)
                              <option value="{{$sbranch->id}}">{{$sbranch->name}}</option>   
                              @endforeach

                               </select>

<div class="input-group">
  <div class="custom-file">
    <input type="file" name="staffimage" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
  </div>
</div>
<div>
<button type="submit" class="btn btn-success" style="margin-bottom:30px;margin-left:500px;>Submit</button>
</div>
</form>
</div>
</div>
@endsection