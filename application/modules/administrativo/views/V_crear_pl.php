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

    <link rel="icon" href="<?php echo base_url(); ?>public/utils/img/icono.ico">
    <style>
        body{
            font-family: 'Montserrat', sans-serif;
        }

    </style>

</head>

<body>

    <?php include 'navbar.php';?>


    <div class="container-fluid">
        <div class="row" style="padding: 30px">

            <?php include 'sidebar.php';?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" >
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2" style="font-weight: bold">Creación</h1>
                </div>
                <p>Los proyectos que presentan los ciudadanos no pueden versar sobre las
                    siguientes materias: presupuestal y financiera, legislación delegada, legislación
                    demarcatoria territorial, tratados internacionales, consentimiento para
                    el ingreso de tropas extranjeras, prórroga del estado de sitio, declaración
                    de guerra y firma de la paz y autorización para que el Presidente de la
                    República pueda ausentarse del país</p>


                <div class="form-group">
                    <label for="exampleInputEmail1" class="bmd-label-floating">Título del proyecto de ley</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                    <span class="bmd-help">We'll never share your email with anyone else.</span>
                </div>
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 mt-5 border-bottom">
                    <h1 class="h4" style="font-weight: bold">Exposición de motivos</h1>
                    <button tabindex="0" type="button" class="btn btn-secondary" data-toggle="popover"
                        data-trigger="focus" title="Exposición de motivos"
                        data-content="Explicación y justificación clara y precisa del por qué y para qué se presenta el proyecto de ley."><span
                            style="color: blue; float: left;" data-feather="alert-circle"></span></button>
                </div>
                <h5>Fundamentos de la ley</h5>
                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label for="exampleTextarea" class="bmd-label-floating">Ingrese fundamento</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-1" style="text-align: center;">
                        <span class="btn-group-sm">
                            <button type="button" class="btn btn-primary bmd-btn-fab" style="margin-top: 40px">
                                <i class="material-icons">add</i>
                            </button>
                        </span>
                    </div>

                </div>
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 mt-5 border-bottom">
                    <h1 class="h4" style="font-weight: bold">Vigencia de la norma</h1>
                    <button tabindex="0" type="button" class="btn btn-secondary" data-toggle="popover"
                        data-trigger="focus" title="Vigencia de la norma"
                        data-content="Es una metodología que se usa para evaluar los costos
                    y beneficios, con la finalidad de conocer los efectos futuros de la ley.<br> Ver ejemplo <a href='www.google.com'>acá</a>"><span
                            style="color: blue; float: left;" data-feather="alert-circle"></span></button>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="bmd-label-floating">Ingrese efecto de la vigencia de la
                        norma</label>
                    <textarea class="form-control" id="exampleInputEmail1" rows="3"></textarea>
                </div>
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 mt-5 border-bottom">
                    <h1 class="h4" style="font-weight: bold">Análisis costo - beneficio</h1>
                    <button tabindex="0" type="button" class="btn btn-secondary" data-toggle="popover"
                        data-trigger="focus" title="Análisis costo - beneficio"
                        data-content="Es una metodología que se usa para evaluar los costos
                        y beneficios, con la finalidad de conocer los efectos futuros de la ley.<br> Ver ejemplo <a href='www.google.com'>acá</a>"><span
                            style="color: blue; float: left;" data-feather="alert-circle"></span></button>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="bmd-label-floating">Ingrese análisis costo -
                        beneficio</label>
                    <textarea class="form-control" id="exampleInputEmail1" rows="3"></textarea>
                </div>

                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 mt-5 border-bottom">
                    <h1 class="h4" style="font-weight: bold">Fórmula legal</h1>
                    <button tabindex="0" type="button" class="btn btn-secondary" data-toggle="popover"
                        data-trigger="focus" title="Fórmula legal"
                        data-content="Es una metodología que se usa para evaluar los costos
                        y beneficios, con la finalidad de conocer los efectos futuros de la ley.<br> Ver ejemplo <a href='www.google.com'>acá</a>"><span
                            style="color: blue; float: left;" data-feather="alert-circle"></span></button>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label for="exampleTextarea" class="bmd-label-floating">Ingrese artículos</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-1" style="text-align: center;">
                        <span class="btn-group-sm">
                            <button type="button" class="btn btn-primary bmd-btn-fab" style="margin-top: 40px">
                                <i class="material-icons">add</i>
                            </button>
                        </span>
                    </div>

                </div>


                <div class="row" style="padding: 25px 0; float: right">

                    <button class="btn btn-default">Cancelar</button>
                    <button type="submit" class="btn btn-primary btn-raised">Registrar</button>
                </div>


            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/material-kit.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
        $('.popover-dismiss').popover({
            trigger: 'focus'
        });
        $("[data-toggle=popover]")
            .popover({ html: true })
    </script>


</body>

</html>