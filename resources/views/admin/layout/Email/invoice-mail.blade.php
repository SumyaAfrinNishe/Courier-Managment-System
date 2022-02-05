<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Mail</title>
</head>
<body>
<div class="container">
    <!-- <h1>{{$invoice['title']}}</h1> -->
    <div id="PrintTableArea">
    <h2>Payment Slip</h1>
    <p>Dear {{$invoice->recepient_name}},</p>
    <p>Your Parcel Details</p>
    <h4 style="color:green;">Transaction ID:{{$invoice->transid}}</h4>
    <table class="table table-bordered">
        <thead>
        <tr>
        <th scope="col">Sender Name</th>
        <th scope="col">Sender Email</th>
        <th scope="col">Sender Phone</th>
        <th scope="col">From Branch</th>
        <th scope="col">To Branch</th>
        <th scope="col">Item</th>
        <th scope="col">Item Details</th>
        <th scope="col">Payment Type(Status)</th>
        <th scope="col">Amount</th>

    </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$invoice->user->name}}</td>
                <td>{{$invoice->user->email}}</td>
                <td>{{$invoice->user->phone}}</td>
                <td>{{$invoice->frombranch->name}}</td>
                <td>{{$invoice->tobranch->name}}</td>
                <td>{{$invoice->type_of_shipment}}</td>
                <td>{{$invoice->courier_description}}</td>
                <td>{{$invoice->delitype}}({{$invoice->payment}})</td>
                <td>{{$invoice->price}}tk</td>
            </tr>
        </tbody>
    </table> 
    <p>Thank you for receive our service.</p>
</body>
<center>  <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a></center>
</div>
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
</html>