@extends('master')
@section('content')
<h1>Staff Details</h1>
<div id="PrintTableArea">
<p>
<img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$staff->staffimage)}}" alt="staff">
</p>
<p>Staff Name: {{$staff->staffname}}</p>
<p>Staff Email: {{$staff->staffemail}}</p>
<p>Staff Contact: {{$staff->staffcontact}}</p>
<p>Staff's Branch: {{$staff->staffbranch}}</p>
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