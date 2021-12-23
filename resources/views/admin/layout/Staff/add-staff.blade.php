@extends('master')
@section('content')
<h1> Add Staff</h1>
<form action="{{route('admin.staff.create')}}" method='POST'>
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

</form>
@endsection