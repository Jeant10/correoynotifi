<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contenido del Email</h1>
    <br>
    Asunto: {{$msg['asunto']}}
    <br>
    Recibiste un correo de: {{$msg['nombre']}} - {{$msg['apellido']}} - {{$msg['correo']}}
    <br>
    <br>
    Detalle: {{$msg['mensaje']}}
    <br>
    <img src=https://i.pinimg.com/originals/83/f7/8e/83f78e62feb95acc85d000aaf6350d23.jpg alt="">
    
</body>
</html>