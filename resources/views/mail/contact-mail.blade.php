<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Grazie per averci contattato {{$user ['name']}}</h1>
    <h2>Ti risponderemo al più presto su questa mail</h2>
    <h4>Il tuo messaggio era : <br> {{$user ['body']}}</h4>
</body>
</html>