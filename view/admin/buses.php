<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="/img/busIcono.png"/>
    <title>MYBUS LLC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/mdb.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
        <div class="rgba-gradient">
            <div class="container">
                    <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
                        
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
                                <ul class="navbar-nav mr-auto">
                                   
                                    <li class="nav-item ">
                                        <a class="nav-link waves-effect waves-light" href="users.php">Usuarios
                                                <span class="sr-only">(current)</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link waves-effect waves-light" href="buses.php">Buses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link waves-effect waves-light" href="routes.php">Rutas</a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav ml-auto nav-flex-icons">
                                   
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i class="fa fa-user"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item waves-effect waves-light" href="setUp.php">Configuración</a>
                                            <a class="dropdown-item waves-effect waves-light" href="../index.php">Log out <i class="fa fa-sign-out"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
            </div>
        </div>
        
        <table class="table table-borderless text-center">

        
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Modelo</th>
                <th>Pasajeros</th>
                <th>Editar</th>
            </tr>
        </thead>
        
        <tbody>


            <?php

            include("../../connection/Connection.php");

            $consulta = mysqli_query($connect, "SELECT * FROM bus");
            while($vector = mysqli_fetch_array($consulta)){

                echo "<tr>";
                echo "<th scope='row'>" . $vector['id_bus'] . "</th>";
                echo "<td>" . $vector['nombre_conductor'] . "</td>";
                echo "<td>" . $vector['modelo_bus'] . "</td>";
                echo "<td>" . $vector['cantidad_pasajeros'] . "</td>";
                echo "<td> <button class='btn btn-primary btn-sm' data-toggle='modal' data-target='#modal1' ><i class='fa fa-pencil'></i> </button> </td>";
                echo "</tr>";


            }

            
            ?>
        
        </tbody>
     

        </table>
      

        <div class="modal fade" id="modal1">
            <div class="modal-dialog">
               
                <form class="modal-content" method="post">
                    
                    <div class="modal-header ">
                        <h5 class="modal-title" >Editar buses</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           &times;
                        </button>
                    </div>

                    <div class="modal-body">

                        <div class="md-form">
                                        <i class="fa fa-drivers-license-o prefix active"></i>
                                        <label  class="active blue-text">Conductor</label>
                                        <input type="text" id="conductor" class="form-control" name="conductor">
                                                
                        </div>
                         <div class="md-form">
                                        <i class="fa fa-bus prefix active"></i>
                                        <label  class="active blue-text">Modelo bus</label>
                                        <input type="text" id="modelo_bus" class="form-control" name="modelo_bus">
                                                
                         </div>
                         <div class="md-form">
                                        <i class="fa fa-group prefix active"></i>
                                        <label  class="active blue-text">Pasajeros</label>
                                        <input type="text" id="pasajeros" class="form-control" name="pasajeros">
                                                
                         </div>
                     
                    </div>

                    
                   
                    <div class="modal-footer justify-content-center">
                        <a type="button" class="btn btn-primary waves-effect waves-light" name="aceptar">Aceptar</a>
                        <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</a>
                    </div>
                </form>
                
            </div>
        </div>




        <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/mdb.min.js"></script>
</body>