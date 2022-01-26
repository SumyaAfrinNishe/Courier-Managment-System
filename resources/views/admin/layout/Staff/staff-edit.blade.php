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

<select id="name" name="staffbranch">
                               <option selected> Branch Name </option>
                              @foreach ($upbranch as $sbranch)
                              <option value="{{$sbranch->id}}">{{$sbranch->name}}</option>   
                              @endforeach

                               </select>



<div>
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
@endsection