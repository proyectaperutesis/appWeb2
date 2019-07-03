<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecta Perú</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link href="<?php echo base_url(); ?>public/administrativo/css/dashboard.css" rel="stylesheet">
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <link rel="icon" href="<?php echo base_url(); ?>public/utils/img/icono.ico">
    <link rel="stylesgeet"
        href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">


        
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>

</head>

<body>

    <?php include 'navbar.php';?>


    <div class="container-fluid">
        <div class="row" style="padding: 30px">

            <?php include 'sidebar.php';?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2" style="font-weight: bold">Mis proyectos de ley</h1>
                </div>
                <p>En esta sección podrás encontrar tus proyectos de ley creados y poder publicarlos a la web pública,
                    esto permitirá
                    a que los ciudadanos puedan brindarte comentarios, ediciones o correciones a tu documento.</p>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" id="selectEstado">
                                <option value="" selected>Seleccione estado</option>
                                <option value="B">Borrador</option>
                                <option value="P">Publicado</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="btnBuscar" style="opacity: 0;">Búsqueda</label><br>
                            <button onclick="buscarProyectosLey()" type="submit"
                                class="btn btn-primary btn-raised">Buscar</button>
                        </div>

                    </div>
                </div>

                <div id="row_proyectos" class="row" style="display: none">
                    <div class="card col-md-12">
                        <div id="body_proyectos" class="card-body" style="display: none">
                            
                        </div>
                    </div>
                </div>


            </main>
            <div class="modal fade" id="modalToPublish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Publicación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 id="title_pl"></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="bmd-label-floating">Ingrese una
                                            descripción a su proyecto de ley</label>
                                        <textarea class="form-control" id="txtDescripcion" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: 0">
                                        <label class="label-control">Fecha de cierre de participación</label>
                                        <input id="txtFecha" type="text" class="form-control datepicker"
                                            style="padding-top: 12px; padding-bottom: 10px">

                                    </div>
                                    <p><span data-feather='alert-circle' style='color: #0ab2ff'></span> La participación de la comunidad hacia tu proyecto de ley estará disponible desde el momento en que lo publiques hasta la fecha de cierre de participación.</p>
                                </div>
                                
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="publicarPL()">Publicar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
    <script>$(document).ready(function () {$('body').bootstrapMaterialDesign(); });</script>
    <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
    <script
        src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/plugins/bootstrap-datetimepicker.js"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/material-kit.js"></script>
    
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
    feather.replace()
  </script>
    <script src="<?php echo base_url(); ?>public/administrativo/js/proyectos_ley.js"></script>
    <script>

        $('.popover-dismiss').popover({
                trigger: 'focus'
});
$("[data-toggle=popover]")
            .popover({html: true })
    </script>


</body>

</html>