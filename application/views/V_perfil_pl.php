<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecta Perú</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url(); ?>public/utils/img/icono.ico">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <style>
        body {
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

        .masthead {
            margin-bottom: 2rem;
        }

        .masthead-brand {
            margin-bottom: 0;
        }

        .nav-masthead .nav-link {
            padding: .25rem 0;
            font-weight: 400;
            color: #000000;
            background-color: transparent;
            border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
            border-bottom-color: rgba(255, 255, 255, .25);
        }

        .nav-masthead .nav-link+.nav-link {
            margin-left: 1rem;
        }

        .nav-masthead .active {
            /*color: #7d7d7d;*/
            border-bottom-color: #fff;
        }

        @media (min-width: 48em) {
            .masthead-brand {
                float: left;
            }

            .nav-masthead {
                float: right;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid d-flex h-100 p-3 flex-column">
        <?php include 'header.php'; ?>

        <div class="container" style="padding: 30px 0">
            <div class="row">
                <div class="card col-md-9 mx-auto" style="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3" style="text-align: center">
                                <span class="helper"></span>
                                <img src="<?php echo base_url(); ?>public/utils/img/categorias/science.png" alt="img_categoria" height="80" width="80">
                            </div>
                            <div class="col-md-9">
                                <p style="text-align: start; color: red; margin-bottom: 0">Cierre de participaciones 13/10/2019</p>
                                <h5 class="card-title" style="text-align: start;color: black; font-weight: bold">
                                    Proyecto de ley para incentivar IA en las escuelas</h5>

                                <p style="float: left">¿Apoyas este proyecto?</p>
                                <span id="btnlike" onclick="prueba()" data-feather="heart" style="color: red; margin: 0 10px"></span>
                                <span data-feather="x"></span>
                                <p class="card-text" style="float: right; color: black">
                                    Más información <span onclick="openModalDescripcion()" style="color: blue">aquí</span>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 mx-auto" style="margin-top: 15px">
                    <span>¿Deseas comentar este proyecto de ley? </span> <span style="color: blue">aquí</span>
                    <br>
                    <span>o también puedes proponer editar, comentar, excluir u opinar un artículo de este proyecto de ley.</span>
                    <br>
                    <div class="card">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Editar</a>
                            <a href="#" class="btn btn-primary">Comentar</a>
                            <a href="#" class="btn btn-primary">Excluir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="mastfoot mt-auto">

        </footer>

        <!-- <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a
                        href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
        </footer> -->
    </div>


    <div class="modal fade" id="modalInformacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Proyecto de ley</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="card-body" style="padding-left: 0; padding-right: 0">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        < script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin = "anonymous" >
    </script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>
    <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/plugins/bootstrap-datetimepicker.js"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/material-kit.js"></script>
    <script src="<?php echo base_url(); ?>public/utils/js/perfilpl.js"></script>

</body>

</html>