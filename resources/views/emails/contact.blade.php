<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail</title>
</head>
<body>
    <h1>Contact Mail</h1>
    <h5>Name: {{$details['name']}}</h5>
    <h5>Email: {{$details['email']}}</h5>
    <h5>Contact: {{$details['phone']}}</h5>
    <h5>Message:</h5>
    <p>{{$details['message']}}</p>
</body>
</html>
