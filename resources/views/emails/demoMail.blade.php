<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>
<body>
    <h1>{{$mailData['title']}}</h1>
    <p>{{$mailData['body']}}</p>
    <p>
        {{session('key')}}
    </p>
</body>
</html>