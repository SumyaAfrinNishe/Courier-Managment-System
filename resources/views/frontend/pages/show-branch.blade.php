@extends('frontend.master')
@section('content')


<div class="features">
		<div class="container">
			<h3 class="m_3">Our Branches</h3>
			<div class="close_but"><i class="close1"> </i></div>

            <div class="row">
                  @foreach($branchlists as $key=>$item)
				<div class="col-md-4 top_box" style="padding:25px">
        <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  border-radius: 5px;
  padding: 20px ;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 5px 10px;
}
</style>
</head>
<body>

<div class="card">
  <img src="{{url('/uploads/'.$item->image)}}" alt="Avatar" style="width:100%">
  <div class="container">
    <h5><b>Name:{{$item->name}}</b></h5> 
    <p><b>E-mail:</b>{{$item->email}}</p> 
    <p><b>Contact:</b>{{$item->contact}}</p> 
    <p><b>Address:</b>{{$item->address}}</p>
    <p><b>City:</b>{{$item->city}}</p> 
    <p><b>State:</b>{{$item->state}}</p>  

  </div>
</div>

        </div>

               
                  @endforeach
                </div>
		 </div>
	    </div>
@endsection