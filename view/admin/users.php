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
                                   <form action="" method="post">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item waves-effect waves-light" href="setUp.php">Configuración</a>
                                                <a class="dropdown-item waves-effect waves-light" href="../index.php" name="logout">Log out <i class="fa fa-sign-out"></i></a>

                                                <?php 

                                                if(isset($_POST['logout'])){
                                                    session_start();
                                                    $_SESSION = array();
                                                    session_destroy();
                                                    header("Location: /../../index.php");
                                                }

                                                
                                                ?>

                                            </div>
                                        </li>
                                    </form>
                                </ul>
                            </div>
                        </nav>
            </div>
        </div>

       
       
                <!--Table-->
                <table class="table table-borderless text-center">

                <!--Table head-->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        
                    </tr>
                </thead>
                <!--Table head-->

                

                <!--Table body-->
                <tbody>


                    <?php

                    include("../../connection/Connection.php");

                    $consulta = mysqli_query($connect, "SELECT * FROM usuario");
                    while ($vector = mysqli_fetch_array($consulta)) {

                        echo "<tr>";
                        echo "<th scope='row'>" . $vector['id_usuario'] . "</th>";
                        echo "<td>" . $vector['nombre_usuario'] . "</td>";
                        echo "<td>" . $vector['email_usuario'] . "</td>";
                        echo "</tr>";


                    }


                    ?>
                   
                </tbody>
                <!--Table body-->

                </table>

                <!--Table-->


        




    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/mdb.min.js"></script>
</body>