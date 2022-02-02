<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Mail</title>
</head>
<body>
    <h1>You have a new lead!</h1>

    <h4>From : {{$data['name']}}</h4>
    <p>Email: {{$data['email']}}</p>
    <br>
    <br>
    <p>{{$data['body']}}</p>
</body>
</html>