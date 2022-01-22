@extends('master')
@section('content')
<h1> Edit Staff</h1>
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



<div class="mb-3">
  <label for="staffbranch" class="form-label">Branch</label>
  <input type="text" name="staffbranch" value="{{$staff->staffbranch}}" class="form-control" id="staffbranch" placeholder="">
</div>



<div>
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
@endsection