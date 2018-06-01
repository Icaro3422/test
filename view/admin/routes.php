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
                                
                                    <li class="nav-item">
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
                <th>Origen</th>
                <th>Destino</th>
                <th>Bus</th>
                <th>Costo</th>
                <th>Editar</th>
            </tr>
        </thead>
      
        <tbody>


            <?php

            include("../../connection/Connection.php");

            $consulta = mysqli_query($connect, "SELECT * FROM ruta");
            while($vector = mysqli_fetch_array($consulta)){

                echo "<tr>";
                echo "<th scope='row'>" . $vector['id_ruta'] . "</th>";
                echo "<td>" . $vector['nombre_ruta'] . "</td>";
                echo "<td>" . $vector['origen_ciudad'] . "</td>";
                echo "<td>" . $vector['destino_ciudad'] . "</td>";
                echo "<td>" . $vector['id_bus'] . "</td>";
                echo "<a href='/view/admin/buses.php'><td> <i class='fa fa-dollar'></i> " . $vector['costo_ruta'] . "</td></a>";
                echo "<td> <button class='btn btn-primary btn-sm' data-toggle='modal' data-target='#modal1'> <i class='fa fa-pencil'></i></i> </button></td>";
                echo "</tr>";


            }

            
            ?>
        
        </tbody>
    

        </table>
       

        <div class="modal fade" id="modal1">
            <div class="modal-dialog">
                
                <form class="modal-content" method="post">
                    
                    <div class="modal-header ">
                        <h5 class="modal-title" >Editar rutas</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           &times;
                        </button>
                    </div>

                    <div class="modal-body">

                        <div class="md-form">
                                        <i class="fa fa-map-o prefix active"></i>
                                        <label  class="active blue-text">Nombre ruta</label>
                                        <input type="text" id="conductor" class="form-control" name="conductor">
                                                
                        </div>
                         <div class="md-form">
                                        <i class="fa fa-bus prefix active"></i>
                                        <label  class="active blue-text">Origen ruta</label>
                                        <input type="text" id="modelo_bus" class="form-control" name="modelo_bus">
                                                
                         </div>
                         <div class="md-form">
                                        <i class="fa fa-location-arrow prefix active"></i>
                                        <label  class="active blue-text">Destino ruta</label>
                                        <input type="text" id="pasajeros" class="form-control" name="pasajeros">
                                                
                         </div>
                         <div class="md-form">
                                
                                <select class="custom-select" id="busesDisponibles" name="busesDisponibles"> <!--aqui debo tomar los buses disponibles de la base de datos -->
                                        <option selected>Buses...</option>
                                        <option value="tunja">1</option>
                                        <option value="bogota">2</option>
                                        <option value="paipa">3</option>
                                </select>
                                                
                         </div>
                         <div class="md-form">
                                        <i class="fa fa-dollar prefix active"></i>
                                        <label  class="active blue-text">Costo ruta</label>
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