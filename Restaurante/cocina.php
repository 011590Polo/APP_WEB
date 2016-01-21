<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 3, from LayoutIt!</title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">



        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <!-- Bootstrap Material Design -->
        <link href="css/bootstrap-material-design.css" rel="stylesheet">
        <link href="css/ripples.min.css" rel="stylesheet">


        <link href="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container-fluid">

            <div id="titulo" class="row">
                <?php include './menu.php'; ?>
 <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading"> <h3  class="text-center">
                            Administrar Cocina   Empleado: <strong> Xavier Acosta</strong>
                        </h3>
                    </div>

                    <ul class="nav nav-tabs">
                        <li >
                            <a >Total Mesas: 50</a>
                        </li>
                        <li>
                            <a >Abiertas: 28</a>
                        </li>
                        <li >
                            <a>Cerradas: 32</a>
                        </li>
                        <li class=" pull-right">
                            <a href="index.php" class="dropdown-toggle">Salir</a>

                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th>
                                            Numero
                                        </th>
                                        <th>
                                            Mesero
                                        </th>
                                        <th>
                                            Hora Apertura
                                        </th>
                                        <th>
                                            Tiempo Abierto
                                        </th>
                                        <th>
                                            Estado
                                        </th>
                                        <th>
                                            N° Pedido
                                        </th>
                                        <th>
                                            Alerta
                                        </th>
                                        <th style="visibility:">
                                            Enviar
                                        </th>
                                    </tr>


                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            TB - Monthly
                                        </td>
                                        <td>
                                            01/04/2012
                                        </td>
                                        <td>
                                            Default
                                        </td>
                                        <td>
                                            Activo
                                        </td>
                                        <td>
                                            23
                                        </td>
                                        <td >
                                            <a id="anchoalertas" href="" class="btn btn-primary btn-xs">LLegando</a>
                                        </td>
                                        <td >
                                            <a href="#myModal" id="openBtn" data-toggle="modal" role="button" href=""><img src="img/enviar.png" ></a>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            TB - Monthly
                                        </td>
                                        <td>
                                            01/04/2012
                                        </td>
                                        <td>
                                            Approved
                                        </td>
                                        <td>
                                            Activo
                                        </td>
                                        <td>
                                            23
                                        </td>
                                        <td>
                                            <a id="anchoalertas"  href="" class="btn btn-success btn-xs">normal</a>
                                        </td>
                                        <td >
                                            <a href=""><img src="img/enviar.png" ></a>
                                        </td> 
                                    </tr>
                                    <tr >
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            TB - Monthly
                                        </td>
                                        <td>
                                            02/04/2012
                                        </td>
                                        <td>
                                            Declined
                                        </td>
                                        <td>
                                            Activo
                                        </td>
                                        <td>
                                            23
                                        </td>
                                        <td >
                                            <a id="anchoalertas"  href="" class="btn btn-warning btn-xs">urgente</a>
                                        </td>
                                        <td >
                                            <a href=""><img src="img/enviar.png" ></a>
                                        </td> 
                                    </tr>
                                    <tr >
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            TB - Monthly
                                        </td>
                                        <td>
                                            03/04/2012
                                        </td>
                                        <td>
                                            Pending
                                        </td>
                                        <td>
                                            Activo
                                        </td>
                                        <td>
                                            23
                                        </td>
                                        <td >
                                            <a id="anchoalertas"  href="" class="btn btn-danger btn-xs">Se Fueron</a>
                                        </td>
                                        <td >
                                            <a href=""><img src="img/enviar.png" ></a>
                                        </td> 
                                    </tr>
                                    <tr >
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            TB - Monthly
                                        </td>
                                        <td>
                                            04/04/2012
                                        </td>
                                        <td>
                                            Call in to confirm
                                        </td>
                                        <td>
                                            Activo
                                        </td>
                                        <td>
                                            23
                                        </td>
                                        <td>
                                            <a id="anchoalertas"  href="" class="btn btn-info btn-xs">Apurar</a>
                                        </td>
                                        <td >
                                            <a href=""><img src="img/enviar.png" ></a>
                                        </td> 
                                    </tr>
                                    <tr >
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            TB - Monthly
                                        </td>
                                        <td>
                                            03/04/2012
                                        </td>
                                        <td>
                                            Pending
                                        </td>
                                        <td>
                                            Activo
                                        </td>
                                        <td>
                                            23
                                        </td>
                                        <td>
                                            <a id="anchoalertas"  href="" class="btn btn-primary btn-xs"> LLegando</a>
                                        </td>
                                        <td >
                                            <a href=""><img src="img/enviar.png" ></a>
                                        </td> 
                                    </tr>
                                    <tr >
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            TB - Monthly
                                        </td>
                                        <td>
                                            04/04/2012
                                        </td>
                                        <td>
                                            Call in to confirm
                                        </td>
                                        <td>
                                            Activo
                                        </td>
                                        <td>
                                            23
                                        </td>
                                        <td>
                                            <a id="anchoalertas"  href="" class="btn btn-success btn-xs">Normal</a>
                                        </td>
                                        <td >
                                            <a href="#myModal" id="openBtn" data-toggle="modal" role="button" href=""><img src="img/enviar.png" ></a>
                                        </td> 
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<!--     pedido  -->
 <div class="modal fade" id="myModal">
                  <div class="modal-dialog">
                      <div class="modal-content">
<!--                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <h3 class="modal-title">Big Title</h3>
                          </div>-->
                          <div class="modal-body">
                              <div class="panel panel-info">
                        <div class="panel-heading"> 
                            <h3  class="text-center">
                                Administrar Pedido   
                            </h3>
                        </div>
                              <table class="table table-striped table-hover " id="tblGrid">
                                  <thead id="tblHead">
                                      <tr>
                                          <th>Cantidad </th>
                                          <th>Descripcion</th>
                                          <th>Observacion</th>
                                          <th >Accion</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>2</td>
                                          <td>Sopa</td>
                                          <td>sin cebolla</td>
                                          <td><a href=""><img id="tamañoiconospedidos" src="img/okl.png" ></a></td>
                                      </tr>
                                      <tr>
                                          <td>4</td>
                                          <td>Pollo</td>
                                          <td>sin azucar</td>
                                          <td><a href=""><img id="tamañoiconospedidos" src="img/nol.png" ></a></td>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>Carne</td>
                                          <td>sin sal</td>                                          
                                          <td><a href=""><img id="tamañoiconospedidos" src="img/okl.png" ></a></td>
                                      </tr>
                                  </tbody>
                              </table>
                              </div>
                              <div class="form-group">
                                  <input type="button" class="btn btn-warning btn-sm pull-right" value="Reset">
                                  <div class="clearfix"></div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save Changes</button>
                          </div>

                      </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
              
              <?php include './piePagina.php';?>
              
              
                <script src="js/jquery.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/scripts.js"></script>

                <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>               
                <script src="dist/js/ripples.min.js"></script>
                <script src="dist/js/material.min.js"></script>
                   <script>
                  $(function () {
                    $.material.init();
                  });
                </script>
    </body>
</html>