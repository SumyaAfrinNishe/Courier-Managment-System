@extends('frontend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{url('frontend/profile/style.css')}}">
    <style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #383d39;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f5d94e}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #0d1c66;
}
</style>
</head>
<aside class="profile-card">
  <header>
    <!-- here’s the avatar -->
    <a target="_blank" href="#">
      <img src="{{url('/uploads/profile.jpg')}}" class="hoverZoomLink">
    </a>

    <!-- the username -->
    <h1>
    {{auth()->user()->name}}
          </h1>

    <!-- and role or location -->
    <h2>
    {{auth()->user()->email}}
          </h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio">

    <p>
      <b>Contact:</b>{{auth()->user()->phone}}
    </p>

    
    <div class="dropdown">
  <button class="dropbtn">Update Profile</button>
  <div class="dropdown-content">
    <a href="{{route('profile.edit')}}">Click here</a>
    <a href="{{route('change.password')}}">Change Password</a>
  </div>
</div>
  </div>
  <div style="margin:2px;">
      <a href="{{route('home')}}">Back to Home</button>
    </div>

  <!-- some social links to show off -->
  
</aside>

</html>
@endsection