@extends('master')
@section('content')
<h1> Add Staff</h1>
<form action="{{route('admin.staff.create')}}" method='POST' enctype="multipart/form-data">
    @csrf
<div class="mb-3">
  <label for="staffname" class="form-label">Name</label>
  <input type="text" name="staffname" class="form-control" id="staffname" placeholder="">
</div>

<div class="mb-3">
  <label for="staffemail" class="form-label">Email</label>
  <input type="text" name="staffemail" class="form-control" id="staffemail" placeholder="">
</div>

<div class="mb-3">
  <label for="staffcontact" class="form-label">Contact</label>
  <input type="text" name="staffcontact" class="form-control" id="staffcontact" placeholder="">
</div>

<div class="mb-3">
  <label for="staffbranch" class="form-label">Branch</label>
  <input type="text" name="staffbranch" class="form-control" id="staffbranch" placeholder="">
</div>

<div class="input-group">
  <div class="custom-file">
    <input type="file" name="staffimage" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
  </div>
</div>
<div>
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
@endsection