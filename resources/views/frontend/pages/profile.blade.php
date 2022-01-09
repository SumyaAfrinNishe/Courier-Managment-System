@extends('frontend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{url('frontend/profile/style.css')}}">
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

  </div>

  <!-- some social links to show off -->
  
</aside>
</html>
@endsection