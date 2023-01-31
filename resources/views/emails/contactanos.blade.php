<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo</title>
</head>
<body>
    <h1>
        <p>Hola <strong>{{ Auth::user()->name }}</strong><br>Tu cita ha sido cancelada con exito</p>
    </h1>
</body>
</html>