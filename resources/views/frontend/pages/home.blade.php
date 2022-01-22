@extends('frontend.master')
@section('content')

<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
               <img src="{{url('frontend/images/slider1.jpeg')}}" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h1 class="title">Courier Management System</h1>
                        <!-- /Text title -->
                        <!-- <div class="button"><a href="#">See Details</a></div> -->
                        <div class="box">
                          <h1>Search Your Courier</h1>
                          <form action="{{route('track.search')}}" method="GET">
                            <input type="search" name="search" placeholder="Enter Your Tracking Number">
                            <input type="submit" value="Search">
                          </form>
                       </div>
                    </div>
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
               <img src="{{url('frontend/images/slider2.jpg')}}" class="img-responsive" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1 class="title">Courier Management System</h1>
                       	<!-- <div class="button"><a href="#">See Details</a></div> -->
                        <div class="box">
                           <h1>Search Your Courier</h1>
                           <form action="{{route('track.search')}}" method="GET">
                            <input type="search" name="search" placeholder="Enter Your Tracking Number">
                            <input type="submit" value="Search">
                          </form>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
       </div>
       <!--/slider -->
      </div>
	  

@endsection