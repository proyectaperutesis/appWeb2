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

    <link href="<?php echo base_url(); ?>public/administrativo/css/dashboard.css" rel="stylesheet">

    <link rel="icon" href="<?php echo base_url(); ?>public/utils/img/icono.ico">

</head>

<body>

    <?php include 'navbar.php';?>


    <div class="container-fluid">
        <div class="row">

            <?php include 'sidebar.php';?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Creación</h1>
                </div>

                
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="bmd-label-floating">Título del proyecto de ley</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">
                        <span class="bmd-help">We'll never share your email with anyone else.</span>
                    </div>
                    <h4>Exposición de motivos</h4>
                    <div class="form-group">
                            <label for="exampleTextarea" class="bmd-label-floating">Fundamento de la ley</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="bmd-label-floating">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1" class="bmd-label-floating">Example select</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect2" class="bmd-label-floating">Example multiple select</label>
                        <select multiple class="form-control" id="exampleSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile" class="bmd-label-floating">File input</label>
                        <input type="file" class="form-control-file" id="exampleInputFile">
                        <small class="text-muted">This is some placeholder block-level help text for the above input.
                            It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Option one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            Option two can be something else and selecting it will deselect option one
                        </label>
                    </div>
                    <div class="radio disabled">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                            Option three is disabled
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Check me out
                        </label>
                    </div>
                    <button class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-raised">Submit</button>
                



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

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>


</body>

</html>