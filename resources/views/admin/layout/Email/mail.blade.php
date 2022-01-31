<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Email</title>
</head>
<body>
    @if($details->status == 'Approved')
    <h1>{{$details['title']}}</h1>
    <p>Dear {{$details->user->name}}</p>
    <p>Your tracking number is {{$details->track_number}}</p>
    <p>Thank You.</p>
    @else
    <h1>Your courier request is cancelled</h1>
    <p>Dear {{$details->user->name}}</p>
    <p>Sorry, your courier request is cancelled.</p>
    @endif

</body>
</html>