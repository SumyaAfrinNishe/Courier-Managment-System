@extends('frontend.master')
@section('content')
<!DOCTYPE html>
<html>
<title>Courier Information</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

*, body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}

html, body {
    height: 100%;
    background-color: #152733;
    overflow: scroll;
}


.form-holder {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 100vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 60px;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}


.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color: #fff;
}

.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}


.btn-primary{
    background-color: #6C757D;
    outline: none;
    border: 0px;
     box-shadow: none;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #495056;
    outline: none !important;
    border: none !important;
     box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up{
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}

.invalid-feedback{
    color: #ff606e;
}

.valid-feedback{
   color: #2acc80;
}
    </style>

    <body>
    <form class="requires-validation" novalidate action="{{route('admin.customer.create')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Customer Information</h3>
                        <p>Fill Your Information for Courier</p>
                        
                          <div class="form-group" style="padding-bottom: 15px;">
                            <div class="col-md-12">
                                <input class="form-control" type="text" id="recepient_name" name="recepient_name" placeholder="Receiver Name" required>
                            </div>
</div>
                        <div class="form-group">
                            <div class="col-md-12" style="padding-bottom: 15px;">
                                <input class="form-control" type="email" id="recepient_email" name="recepient_email" placeholder="Receiver E-mail Address" required>
                            </div>
</div>
                          <div class="form-group">
                            <div class="col-md-12" style="padding-bottom: 15px;">
                                <input class="form-control" type="number" id="recepient_phone" name="recepient_phone" placeholder="Receiver Contact" required>
                            </div>
</div>
                           
                         <div style="padding-bottom: 15px;">
                             <select id="name" name="from_branch_name">
                               <option selected> From Branch Name </option>
                              @foreach ($lists as $branch)
                              <option value="{{$branch->id}}">{{$branch->name}}</option>   
                              @endforeach
                               </select>
</div>
<div style="padding-bottom: 15px;">
                               <select id="name" name="to_branch_name">
                               <option selected> To Branch Name </option>
                              @foreach ($lists as $branch)
                              <option value="{{$branch->id}}">{{$branch->name}}</option>   
                              @endforeach
                               </select>
</div>




                     
                            <label class="mb-3 mr-1" for="type_of_shipment">Type of: </label>

                            <input type="radio" class="btn-check" value="Electronics" name="type_of_shipment" id="electronics" autocomplete="off" required>

                  
                            <label class="btn btn-sm btn-outline-secondary" for="electronics">Electronics</label>

                            <input type="radio" class="btn-check" value="Cloths" name="type_of_shipment" id="cloths" autocomplete="off" required>
     

                            <label class="btn btn-sm btn-outline-secondary" for="cloths">Cloths</label>

                            <input type="radio" class="btn-check" value="Shoes" name="type_of_shipment" id="shoes" autocomplete="off" required>


                            <label class="btn btn-sm btn-outline-secondary" for="shoes">Shoes</label>

                            <input type="radio" class="btn-check" value="Cosmetics" name="type_of_shipment" id="cosmetics" autocomplete="off" required>

                            <label class="btn btn-sm btn-outline-secondary" for="cosmetics">Cosmetics</label>

                            <input type="radio" class="btn-check" value="Jwellery" name="type_of_shipment" id="jwellery" autocomplete="off" required>


                            <label class="btn btn-sm btn-outline-secondary" for="jwellery">Jwellery</label>

                            <input type="radio" class="btn-check" value="Crockeries" name="type_of_shipment" id="crockeries" autocomplete="off" required>


                            <label class="btn btn-sm btn-outline-secondary" for="crockeries">Crockeries</label>

                            <input type="radio" class="btn-check" value="Food" name="type_of_shipment" id="food" autocomplete="off" required>


                            <label class="btn btn-sm btn-outline-secondary" for="food">Food</label>

                            <input type="radio" class="btn-check" value="Furniture" name="type_of_shipment" id="furniture" autocomplete="off" required>


                            <label class="btn btn-sm btn-outline-secondary" for="furniture">Furniture</label>

                            <input type="radio" class="btn-check" value="Construction" name="type_of_shipment" id="construction" autocomplete="off" required>

                            <label class="btn btn-sm btn-outline-secondary" for="construction">Construction Material</label>
                              
                          
                            <div class="col-md-12" style="padding-bottom: 15px;">
                                <input class="form-control" type="text" id="courier_description"name="courier_description" placeholder="Courier Description" required>
                            </div>

                            <div class="col-md-12" style="padding-bottom: 15px;">
                                <input class="form-control" type="number" id="quantity" name="quantity" placeholder="Quantity in packet" required>
                            </div>
                            <div class="col-md-12" style="padding-bottom: 15px;">
                                <input class="form-control" type="number" id="weight" name="weight" placeholder="Weight(kg)" required>
                            </div>
                            <div class="col-md-12" style="padding-bottom: 15px;">
                            <select class="form-control" name="delitype">
                            <option selected>Delivery Type </option>
                            <option value="Prepayment">PrePayment</option>
                            <option value="Condition">Condition</option>
                            </select>
                            </div>
                            <div class="input-group" style="padding-bottom: 15px;">
                        <div class="custom-file">
                        <input type="file" name="cus_image" class="custom-file-input" id="cus_image" aria-describedby="inputGroupFileAddon04">
                          </div>
                          </div>

                        <div class="form-button mt-3">
                           <button id="submit" type="submit" class="btn btn-primary">Confirm</button>
                        </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
                    
                    
                    </form>
                   
    
    </body>

    <script>
        (function () {
'use strict'
const forms = document.querySelectorAll('.requires-validation')
Array.from(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

    </script>
</html>
@endsection