@extends('master')
@section('content')
<h1>Branch Details</h1>

<div id="PrintTableArea">
<p>
<img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$branch->image)}}" alt="branch">
</p>
<p>Branch Name: {{$branch->name}}</p>
<p>Branch Contact: {{$branch->contact}}</p>
<p>Branch Email: {{$branch->email}}</p>
<p>Branch Address: {{$branch->address}}</p>
<p>Branch City: {{$branch->city}}</p>
<p>Branch State: {{$branch->state}}</p>
<p>Branch Pincode: {{$branch->pincode}}</p>
<p>Branch Country: {{$branch->country}}</p>
</div>
<a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>
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