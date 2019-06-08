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

    <link href="<?php echo base_url(); ?>public/utils/css/cover.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url(); ?>public/utils/img/icono.ico">
    <link rel="stylesgeet"
        href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <style>
        .helper {
            display: inline-block;
            height: 100%;
            vertical-align: middle;
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="text-center">
    <div class="container-fluid d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <!-- <h3 class="masthead-brand">Proyecta Perú</h3> -->
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="<?php echo base_url(); ?>">Home</a>
                    <a class="nav-link" href="proyectos">Proyectos de Ley</a>
                    <a class="nav-link" href="quienesomos">¿Quienes somos?</a>
                    <a class="nav-link" href="login">Iniciar sesión</a>
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover" style="padding-top: 150px; padding-bottom: 50px">
            <img src="<?php echo base_url(); ?>public/utils/img/logo.png" alt="logo" height="100">
            <h4 class="cover-heading shadowText" style="color: black; font-weight: bold; margin-top: 20px">Plataforma de
                edición y
                creación
                legislativa</h4>
            <p style="color: black">Lee, analiza y contribuye a los proyectos de ley creados por <br>los congresistas y
                ciudadanos. Estos
                acompañan y pueden adoptar tus ideas.</p>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="form-group" style="text-align: start;">
                        <!-- left unspecified, .bmd-form-group will be automatically added (inspect the code) -->
                        <label for="formGroupExampleInput" class="bmd-label-floating">Buscar proyecto de ley</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                </div>
            </div>


            <div class="row col-md-8 mx-auto" style="padding-left: 0; padding-right: 0">
                <div class="col-md-3" style="padding-left: 0;">
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Categoría</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="label-control">Fecha de publicación</label>
                        <input type="text" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Tipo de usuario</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="text-align: end">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-raised"
                            style="background: #ed161f">Buscar</button>
                    </div>
                </div>
            </div>

            <div style="height:100%; overflow-y: scroll; padding-top: 30px;">
                <div class="card col-md-8 mx-auto" style="margin-bottom: 10px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="helper"></span>
                                <img src="<?php echo base_url(); ?>public/utils/img/categorias/science.png"
                                    alt="img_categoria" height="80" width="80">
                            </div>
                            <div class="col-md-9">
                                <h5 class="card-title" style="text-align: start;color: black; font-weight: bold">
                                    Proyecto de ley para incentivar IA en las escuelas</h5>
                                <p class="card-text" style="text-align: justify;float: left; color: black">With
                                    supporting text below as a
                                    natural lead-in to additional content supporting text below as a natural lead-in to
                                    additional content supporting text below as a natural lead-in to additional content
                                    supporting text below as a natural lead-in to additional content.</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-md-8 mx-auto" style="margin-bottom: 10px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="helper"></span>
                                <img src="<?php echo base_url(); ?>public/utils/img/categorias/science.png"
                                    alt="img_categoria" height="80" width="80">
                            </div>
                            <div class="col-md-9">
                                <h5 class="card-title" style="text-align: start;color: black; font-weight: bold">
                                    Proyecto de ley para incentivar IA en las escuelas</h5>
                                <p class="card-text" style="text-align: justify;float: left; color: black">With
                                    supporting text below as a
                                    natural lead-in to additional content supporting text below as a natural lead-in to
                                    additional content supporting text below as a natural lead-in to additional content
                                    supporting text below as a natural lead-in to additional content.</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-md-8 mx-auto" style="margin-bottom: 10px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="helper"></span>
                                <img src="<?php echo base_url(); ?>public/utils/img/categorias/science.png"
                                    alt="img_categoria" height="80" width="80">
                            </div>
                            <div class="col-md-9">
                                <h5 class="card-title" style="text-align: start;color: black; font-weight: bold">
                                    Proyecto de ley para incentivar IA en las escuelas</h5>
                                <p class="card-text" style="text-align: justify;float: left; color: black">With
                                    supporting text below as a
                                    natural lead-in to additional content supporting text below as a natural lead-in to
                                    additional content supporting text below as a natural lead-in to additional content
                                    supporting text below as a natural lead-in to additional content.</p>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </main>

        <footer class="mastfoot mt-auto">

        </footer>

        <!-- <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a
                        href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
        </footer> -->
    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
        crossorigin="anonymous"></script>
    <script>$(document).ready(function () { $('body').bootstrapMaterialDesign(); });</script>
    <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
    <script
        src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/plugins/bootstrap-datetimepicker.js"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/material-kit.js"></script>
    <script src="<?php echo base_url(); ?>public/utils/js/cover.js"></script>

</body>

</html>