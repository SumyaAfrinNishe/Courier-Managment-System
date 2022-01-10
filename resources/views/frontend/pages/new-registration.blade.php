 @extends('frontend.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<!-- Mobile Specific Metas -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{url('backend/newlogin/style.css')}}">
	<!-- Main Style Css -->
</head>
<body>
<div class="login-box">
  <h2>Registration</h2>
  <form class="form-detail" action="{{route('registration.store')}}" method='POST'>
   @csrf
    <div class="user-box">
      <input type="text" name="name" id="name" required>
      <label>Your Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="email" id="email" required>
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="number" name="phone" id="phone" required>
      <label>Contact</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" id="password" required="">
      <label>Password</label>
    </div>
    <a href="{{route('home')}}" type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Register
    </a>
  </form>
</div>
</body>
</html>
@endsection