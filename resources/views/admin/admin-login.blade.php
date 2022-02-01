<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="type/css" href="{{url('backend/newlogin/style.css')}}"/>

</head>
<body>
	
<div class="login-box">
  <h2>Admin Login</h2>
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
  <form class="login100-form validate-form" action="{{route('admin.doLogin')}}" method='POST'>
	@csrf
    <div class="user-box" data-validate = "Username is required"> 
      <input type="text" name="email" required="email">
      <label>Username</label>
    </div>
    <div class="user-box" data-validate="Password is required">
      <input type="password" name="password" required="password">
      <label>Password</label>
    </div>
    <a href="{{route('dashboard')}}">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div>

</body>
</html>