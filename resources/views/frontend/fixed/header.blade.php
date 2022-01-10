<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12">
				
					 <div class="col-lg-3">
						<img src="{{url('frontend/images/logof2.png')}}" alt="" style="width:100px;height:100px;"/>
					 </div>
					 <div class="col-lg-9">
						  <a class="toggleMenu" href="#"><img src="{{url('frontend/images/nav.png')}}" alt="" /></a>
						    <ul class="" id="nav" style="display:flex; justify-content: space-between;">
						    	<li style="list-style:none; "><a style="color: white;" href="{{route('home')}}">Home</a></li>
						    	<li  style="list-style:none; "><a style="color: white;" href="#">About Us</a></li>
						    	<li  style="list-style:none;" ><a style="color: white;" href="{{route('showbranch')}}">Branch</a></li>
								<li style="list-style:none; "><a style="color: white;" href="{{route('showbranch')}}">Payment</a></li>
								<li style="list-style:none; "><a style="color: white;" href="{{route('information')}}">Information</a></li>
								<li style="list-style:none; "><a style="color: white;" href="{{route('show.courier.info')}}">Courier Information</a></li>
								@if(auth()->user())
								<li style="list-style:none; "><a style="color: white;" href="{{route('logout')}}">Logout</a></li>
									@else
									<li style="list-style:none; "><a style="color: white;" href="{{route('user.login')}}">Login</a></li>
									<li style="list-style:none; "><a style="color: white;" href="{{route('registration')}}">Registartion</a></li>
								@endif
								<li style="list-style:none; "><a style="color: white;" href="{{route('profile')}}">Profile</a></li>
								<li style="list-style:none; "><a style="color: white;" href="#">Contact</a></li>
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="{{url('frontend/js/responsive-nav.js')}}"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	   
	        <!-- <div class="header_right">
	    		 
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						
						<script src="{{url('frontend/js/classie.js')}}"></script>
						<script src="{{url('frontend/js/uisearch.js')}}"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						
				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="{{url('frontend/images/edit.png')}}" alt=""/></a>
						  		<a href="#"><img src="{{url('frontend/images/close_edit.png')}}" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="{{url('frontend/images/1.jpg')}}" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                          $12.00</span></li>
						  <div class="login_buttons">
							 <div class="check_button"><a href="checkout.html">Check out</a></div>
							 <div class="login_button"><a href="login.html">Login</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		           <div class="clear"></div>
	       </div> -->
	      </div>
		 </div>
	    </div>
	</div>