@extends('frontend.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{url('frontend/regcss/nunito-font.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
	<!-- <Custom Styles> -->
	<link rel="stylesheet" type="text/css" href="{{url('frontend/regcss/style.css')}}">
</head>
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('frontend/images/regimage.jpg')">
			<form class="form-detail" action="{{route('registration.store')}}" method='POST'>
                @csrf
				<h2>Registration Form</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="name" id="name" class="input-text" placeholder="Your Name" required>
					</div>
					<div class="form-row">
						<input type="text" name="email" id="email" class="input-text" placeholder="Your Email">
					</div>

				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					</div>
			
					<div class="form-row">
						<input type="number" name="phone" id="phone" class="input-text" placeholder="Phone Number" required>
					</div>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				
				</div>
				
			</form>
		</div>
	</div>
</body>
</html>
@endsection