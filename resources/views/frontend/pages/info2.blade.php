@extends('frontend.master')
@section('content')
<!DOCTYPE html>
<html>
<title>Login</title>
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
    <form action="{{route('admin.customer.create')}}" method="post">
        @csrf
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Customer Information</h3>
                        <p>Fill Your Information for Courier</p>
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                               <input class="form-control" type="text" id="yourname" name="yourname" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" id="youremail" name="youremail" placeholder="Your E-mail Address" required>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="number" id="yourcontact" name="yourcontact" placeholder="Your Contact" required>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" id="receivername" name="receivername" placeholder="Receiver Name" required>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" id="receiveremail" name="receiveremail" placeholder="Receiver E-mail Address" required>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="number" id="receivercontact" name="receivercontact" placeholder="Receiver Contact" required>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" id="branchname"name="branchname" placeholder="Branch Name" required>
                            </div>

                            <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="type">Type of: </label>

                            <input type="radio" class="btn-check" value="Electronics" name="type" id="electronics" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="electronics">Electronics</label>

                            <input type="radio" class="btn-check" value="Cloths" name="type" id="cloths" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="cloths">Cloths</label>

                            <input type="radio" class="btn-check" value="Shoes" name="type" id="shoes" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="shoes">Shoes</label>

                            <input type="radio" class="btn-check" value="Cosmetics" name="type" id="cosmetics" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="cosmetics">Cosmetics</label>

                            <input type="radio" class="btn-check" value="Jwellery" name="type" id="jwellery" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="jwellery">Jwellery</label>

                            <input type="radio" class="btn-check" value="Crockeries" name="type" id="crockeries" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="crockeries">Crockeries</label>

                            <input type="radio" class="btn-check" value="Food" name="type" id="food" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="food">Food</label>

                            <input type="radio" class="btn-check" value="Furniture" name="type" id="furniture" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="furniture">Furniture</label>

                            <input type="radio" class="btn-check" value="Construction" name="type" id="construction" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="construction">Construction Material</label>
                              
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="number" id="quantity" name="quantity" placeholder="Quantity" required>
                            </div>

                        <div class="form-button mt-3">
                           <button id="submit" type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                        
                    
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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