<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail to admin</title>
</head>
<body>
    <h1>Hey c'è un nuovo messaggio dal tuo sitoweb da {{$contactToAdmin['user']}}</h1>
    <p>Ti ha scritto: {{$contactToAdmin['message']}}</p>
</body>
</html>