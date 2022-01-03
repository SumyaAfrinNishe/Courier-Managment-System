@extends('master')
@section('content')
<h1> Update Status</h1>
<form action="{{route('admin.collect.update.status',$collect->id)}}" method='POST' enctype="multipart/form-data">
@method('PUT')
@csrf
<div class="mb-3">
  <label for="status" class="form-label">Status</label>
  <input type="text" name="status" value="{{$collect->status}}" class="form-control" id="status" placeholder="">
</div>

<div>
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
@endsection