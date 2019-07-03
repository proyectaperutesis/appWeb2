<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecta Perú</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">

    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link href="<?php echo base_url(); ?>public/utils/css/cover.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url(); ?>public/utils/img/icono.ico">
    <link rel="stylesgeet"
        href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <style>
        body{
            font-family: 'Montserrat', sans-serif;
        }

        .helper {
            display: inline-block;
            height: 100%;
            vertical-align: middle;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        #wrapper {
        width: 100%;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        }
    </style>
</head>

<body class="text-center">
    <div class="container-fluid d-flex h-100 p-3 mx-auto flex-column">
        <?php include 'header.php';?>

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
                        <input type="text" class="form-control" id="txtTitulo">
                    </div>
                </div>
            </div>


            <div class="row col-md-8 mx-auto" style="padding-left: 0; padding-right: 0">
                <div class="col-md-3" style="padding-left: 0;">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Categoría</label>
                        <select class="form-control" id="selectCategoria">
                            <option value="" selected>Seleccione</option>
                            <?php echo $select_categoria?>
                        </select>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" style="margin-top: 0">
                        <label class="label-control">Fecha de publicación</label>
                        <input id="txtFecha" type="text" class="form-control datepicker" style="padding-top: 12px; padding-bottom: 10px">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo de persona</label>
                        <select class="form-control" id="selectTipo">
                          <option value="" selected>Seleccione</option>
                          <?php echo $select_roles?>
                        </select>
                      </div>
                </div>
                <div class="col-md-3" >
                    <div class="form-group" id="wrapper">

                        <button type="submit" class="btn btn-primary btn-raised" onclick="buscarProyectosLey()"
                            style="background: #ed161f; float: right;">Buscar</button>
                    </div>
                </div>
            </div>

            <div id="divContainerPLs" style="height:350px; overflow-y: scroll; padding-top: 5px;">
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




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
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