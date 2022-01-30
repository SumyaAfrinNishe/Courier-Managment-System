@extends('master')
@section('content')
<html>
    <head> 
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #0C4160;
    padding: 30px 10px
}

.card {
    max-width: 500px;
    margin: auto;
    color: black;
    border-radius: 20 px
}

p {
    margin: 0px
}

.container .h8 {
    font-size: 30px;
    font-weight: 800;
    text-align: center
}

.btn.btn-primary {
    width: 100%;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 15px;
    background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%);
    border: none;
    transition: 0.5s;
    background-size: 200% auto
}

.btn.btn.btn-primary:hover {
    background-position: right center;
    color: #fff;
    text-decoration: none
}

.btn.btn-primary:hover .fas.fa-arrow-right {
    transform: translate(15px);
    transition: transform 0.2s ease-in
}

.form-control {
    color: white;
    background-color: #223C60;
    border: 2px solid transparent;
    height: 60px;
    padding-left: 20px;
    vertical-align: middle
}

.form-control:focus {
    color: white;
    background-color: #0C4160;
    border: 2px solid #2d4dda;
    box-shadow: none
}

.text {
    font-size: 14px;
    font-weight: 600
}

::placeholder {
    font-size: 14px;
    font-weight: 600
}
</style>

        
</head>
<body>

<div class="container p-0">
    <div class="card px-4">
        <p class="h8 py-3">Add Payment</p>
        <form action="{{route('admin.add.payment.create',$id)}}" method='POST'>
            @csrf
        <div class="row gx-3">
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Transaction ID</p> 
                    <input class="form-control mb-3" name="transid" type="number" placeholder="transaction number" value="Barry Allen">
                </div>
            </div>
            <!-- <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Phone Number</p> <input class="form-control mb-3" type="text" placeholder="1234 5678 435678">
                </div>
            </div> -->
            <!-- <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Phone Number</p>
                     <input class="form-control mb-3" type="number" placeholder="phone">
                </div>
            </div> -->
            <!-- <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Amount</p> 
                    <input class="form-control mb-3 pt-2 " name="amount" type="number" placeholder="IN BDT">
                </div>
            </div> -->
            <div class="col-12">
                <button class="btn btn-primary mb-3" type="submit"> <span class="ps-3">Paid</span> <span class="fas fa-arrow-right"></span> </button>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
@endsection