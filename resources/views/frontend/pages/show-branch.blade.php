@extends('frontend.master')
@section('content')


<div class="features">
		<div class="container">
			<h3 class="m_3">Our Branches</h3>
			<div class="close_but"><i class="close1"> </i></div>

            <div class="row">
                  @foreach($branchlists as $key=>$item)
				<div class="col-md-3 top_box">
				  <div class="view view-ninth"><a href="single.html">
                    <img src="{{url('/uploads/'.$item->image)}}" class="img-responsive" alt="" style="height: 190px;"/>
                   
                      <div class="content">
                        <h2>{{$item->name}}</h2>
                        <h2>{{$item->contact}}</h2>
                        <h2>{{$item->email}}</h2>
                        <!-- <h2>{{$item->address}}</h2>
                        <h2>{{$item->city}}</h2>
                        <h2>{{$item->state}}</h2>
                        <h2>{{$item->country}}</h2> -->
                        <p> <img src="{{url('/uploads/'.$item->image)}}" width="100px" alt="branch image"></p>
          

                </div>
                  
           </div>

        </div>

               
                  @endforeach
                </div>
		 </div>
	    </div>
@endsection