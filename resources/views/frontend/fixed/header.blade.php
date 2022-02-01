<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12">
			  <!-- <nav class="navbar navbar-inverse navbar-fixed-top"> -->
					 <!-- <div class="col-lg-2">
						<img src="{{url('frontend/images/courierlogo1.png')}}" alt="" style="width:100px;height:100px;"/>
					 </div> -->
					 <div class="col-lg-9">
						  
						    <ul class="nav navbar-nav navbar" id="nav" style="display:flex; justify-content: space-between;">
							<img src="{{url('frontend/images/courierlogo1.png')}}" alt="" style="width:100px;height:100px;"/>
						    	<li style="list-style:none; "><a style="color: white;" href="{{route('home')}}">Home</a></li>
						    	<li  style="list-style:none;" ><a style="color: white;" href="{{route('showbranch')}}">Branch</a></li>
								<li style="list-style:none; "><a style="color: white;" href="{{route('information')}}">Courier Request</a></li>
								<li style="list-style:none; "><a style="color: white;" href="{{route('profile.status.view')}}">My Courier History</a></li>
								<!-- <div class="col-lg-1">
						<img src="{{url('frontend/images/courierlogo1.png')}}" alt="" style="width:100px;height:100px;"/>
					 </div> -->
								@if(auth()->user())
								<li style="list-style:none; "><a style="color: white;" href="{{route('user.logout')}}">Logout</a></li>
									@else
									<li style="list-style:none; "><a style="color: white;" href="{{route('user.login')}}">Login</a></li>
									<li style="list-style:none; "><a style="color: white;" href="{{route('registration')}}">Registartion</a></li>
								@endif
								<li style="list-style:none; "><a style="color: white;" href="{{route('profile')}}">Profile</a></li>
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
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="{{url('frontend/js/responsive-nav.js')}}"></script> -->
<!-- </nav> -->
	       </div>
	      </div>
		 </div>
	    </div>
	</div>