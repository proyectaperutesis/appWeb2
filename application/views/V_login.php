<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecta Perú</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link href="<?php echo base_url(); ?>public/utils/css/signin.css" rel="stylesheet">

    <link rel="icon" href="<?php echo base_url(); ?>public/utils/img/icono.ico">

</head>

<body class="text-center">
    <form class="form-signin">
        <img class="mb-4" src="<?php echo base_url(); ?>public/utils/img/logo.png" alt="logo" height="100">

        <label for="inputEmail" class="sr-only">Correo</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Correo" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <button type="button" class="btn btn-block btn-raised btn-primary mt-4" style="background: #ed161f">Iniciar
            sesión</button>
        <p class="mt-1 mb-3 text-muted"><a href="<?php echo base_url(); ?>"
                style="text-decoration: none; color: #7a7878">¿No tienes cuenta? Regístrate</a></p>

        <p class="mt-5 mb-3 text-muted"><a href="<?php echo base_url(); ?>" style="text-decoration: none">Volver a
                home</a></p>
    </form>
</body>

</html>