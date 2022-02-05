@extends('master')
@section('content')
<center><h1> Edit Staff</h1></center>
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
<form action="{{route('admin.staff.update',$staff->id)}}" method='POST' enctype="multipart/form-data">
    @method('PUT')
    @csrf
<div class="mb-3">
  <label for="staffname" class="form-label">Name</label>
  <input type="text" name="staffname" value="{{$staff->staffname}}" class="form-control" id="staffname" placeholder="">
</div>

<div class="mb-3">
  <label for="staffcontact" class="form-label">Contact</label>
  <input type="text" name="staffcontact" value="{{$staff->staffcontact}}" class="form-control" id="staffcontact" placeholder="">
</div>

<div class="mb-3">
  <label for="staffemail" class="form-label">Email</label>
  <input type="text" name="staffemail" value="{{$staff->staffemail}}" class="form-control" id="staffemail" placeholder="">
</div>

<div class="mb-3">
  <label for="staffpassword" class="form-label">Password</label>
  <input type="password" name="staffpassword" value="{{$staff->staffpassword}}" class="form-control" id="staffpassword" placeholder="">
</div>

<select id="name" name="staffbranch">
                               <option selected> Branch Name </option>
                              @foreach ($upbranch as $sbranch)
                              <option value="{{$sbranch->id}}">{{$sbranch->name}}</option>   
                              @endforeach

                               </select>
                               <div class="input-group">
  <div class="custom-file">
  <label for="staffimage" class="form-label">Image</label>
    <input type="file" name="staffimage" value="{{$staff->staffimage}}" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
  </div>
</div>


<div>
<button type="submit" class="btn btn-success" style="margin-bottom:30px;margin-left:500px;">Submit</button>
</div>
</form>
@endsection