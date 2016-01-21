<!DOCTYPE html>
<html>
<!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>Bootstrap Material</title>

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  <link href="css/bootstrap-material-design.css" rel="stylesheet">
  <link href="css/ripples.min.css" rel="stylesheet">


    <link href="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


   <?php include './menu.php';?>

     <div class="container-fluid">
            <div id="titulo" class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading"> <h2  class="text-center">
                                H3. RESTAURANTE.
                            </h2>
                        </div>

                        <div class="row text-center">                            
                            <div class="col-md-4">
                                <a href="index1.html"><img width="150" height="150" alt="Bootstrap Image Preview" src="img/mesero.png" class="img-circle"></a><br> Meseros
                            </div>
                            <div class="col-md-4">
                                <a href="Mesas.php"><img width="150" height="150" alt="Bootstrap Image Preview" src="img/admin.png" class="img-circle"></a><br> Administrador
                            </div>
                    
                            
                            <div class="col-md-4">
                                <a href="cocina.php"><img style="padding-top: 15px;padding-bottom: -10px" width="150" height="150" alt="Bootstrap Image Preview" src="img/cocinero.png" class="img-circle"></a><br> Cocineros
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    
     <?php include './piePagina.php';?>

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="dist/js/ripples.min.js"></script>
    <script src="dist/js/material.min.js"></script>
    <!--<script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>-->

    <!--
    <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>-->
    <script>
      $(function () {
        $.material.init();
      });
    </script>
</body>
</html>
