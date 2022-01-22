@extends('master')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<center>
<h1>Branch Details</h1>
<center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>


</center>
<div id="PrintTableArea">


<p><h3>Branch Name: {{$branch->name}}</span></h3><h2><span style="color:#2874A6"></span><h2></p>

<p><h4><span style="color:#2E4053">Branch Name:{{$branch->contact}}</span></h4></p>
<p><h4><span style="color:#2E4053">Branch Contact: {{$branch->contact}}</span></h4></p>
<p><h4><span style="color:#2E4053">Branch Email: {{$branch->email}}</span></h4></p>
<p><h4><span style="color:#2E4053">Branch Address: {{$branch->address}}</span></h4></p>
<p><h4><span style="color:#2E4053">Branch City: {{$branch->city}}</span></h4></p>
<p><h4><span style="color:#2E4053">Branch State: {{$branch->state}}</span></h4></p>
<p><h4><span style="color:#2E4053">Branch Pincode: {{$branch->pincode}}</span></h4></p>
<p><h4><span style="color:#2E4053">Branch Country: {{$branch->country}}</span></h4></p>

<p>
    <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$branch->image)}}" alt="post">
</p>

</center>
</div>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

@endsection