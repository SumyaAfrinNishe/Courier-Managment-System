@extends('master')

@section('content')

<html>
    <head>

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="{{url('backend/css/dashboard.css')}}" />

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Courier Request</h6>
                    <!-- <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span></span></h2> -->
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>{{$count['request']}}</span></h2>
                    <p class="m-b-0">Cancel Request<span class="f-right">{{$count['cancelrequest']}}</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Branch</h6>
                    <h2 class="text-right"><i class="fa fa-building f-left"></i><span>{{$count['totalbranch']}}</span></h2>
                    
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Staff</h6>
                    <h2 class="text-right"><i class="fa fa-user f-left"></i><span>{{$count['totalstaff']}}</span></h2>
                    
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Customer Confirmed Request</h6>
                    <h2 class="text-right"><i class="fa fa-check f-left"></i><span>{{$count['cusconfirm']}}</span></h2>
                    <p class="m-b-0">Customer Cancel Request<span class="f-right">{{$count['cuscancel']}}</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-red order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Accepted By Courier</h6>
                    <h2 class="text-right"></i><span>{{$count['accepted']}}</span></h2>
                    <p class="m-b-0">Courier Collected<span class="f-right">{{$count['ccollected']}}</span></p>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-velvet order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Ready To Pick Up</h6>
                    <h2 class="text-right"></i><span>{{$count['rtpu']}}</span></h2>
                    <p class="m-b-0">Picked<span class="f-right">{{$count['picked']}}</span></p>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Out For Delivery</h6>
                    <h2 class="text-right"></i><span>{{$count['ofd']}}</span></h2>
                    <p class="m-b-0">Arrived At Destination<span class="f-right">{{$count['aad']}}</span></p> 
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellowish order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Shipped</h6>
                    <h2 class="text-right"><i class="fas fa-rocket f-left"></i><span>{{$count['ship']}}</span></h2>
                    <p class="m-b-0">Intransit<span class="f-right">{{$count['intran']}}</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-black order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Delivered</h6>
                    <h2 class="text-right"></i><span>{{$count['delivrd']}}</span></h2>
                    <p class="m-b-0">Unsuccessful Delivery<span class="f-right">{{$count['ud']}}</span></p>
                    
                </div>
            </div>
        </div>
	</div>
</div>
</body>
<html>
 <!-- <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Courier</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Courier Pickup</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Shipped</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Intransit</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Courier Arrived at Destination</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Courier Out for Delievery</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Delieverd Courier</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div> -->


@endsection