<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" type="image/png" href="/img/busIcono.png"/>
        <title>MYBUS LLC</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500" rel="stylesheet">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/mdb.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>

    <body>



            
            <div class="view">
               
                <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
                    
                    <div class="container">
                        
                        <div class="row mt-5">
                            
                            <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                                
                                
                                <form class="p-6" action="" method="post">   
                                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h3 class="white-text">
                                                    <i class="fa fa-sign-in white-text"></i> Log in</h3>
                                                <hr class="hr-light">
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-at prefix white-text active"></i>
                                                <input type="text" id="login_email" class="white-text form-control" name="login_email">
                                                <label for="login_email" class="active">Tu email</label>
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-lock prefix white-text active"></i>
                                                <input type="password" id="login_password" class="white-text form-control" name="login_password">
                                                <label for="login_password" class="active">Tu contraseña</label>
                                            </div>
                                            <div class="text-center mt-4">
                                                <button class="btn btn-primary" name="login_ingresar">Ingresar</button>

                                            </div>
                                            <?php

                                            include('../connection/Connection.php');

                                            $email = isset($_POST['login_email']) ? $_POST['login_email'] : '';
                                            $password = isset($_POST['login_password']) ? $_POST['login_password'] : '';

                                            if (isset($_POST['login_ingresar'])) {
                                                $consulta = mysqli_query($connect, "SELECT * FROM usuario");
                                               
                                                while($valor = mysqli_fetch_array($consulta)){;

                                                   
                                                    if($valor['nombre_usuario'] == "admin" && !strcmp($valor['password_usuario'], $password)){
                                                        
                                                        header("Location: ../view/admin/users.php");

                                                    }
                                                    
                                                    if ($valor['email_usuario'] == $email && $valor['nombre_usuario'] != "admin" && $valor['password_usuario'] == $password) {
                                                       
                                                        header("Location: ../view/user/userPage.php");    

                                                    } 
                                                     if($valor['email_usuario'] == " " && $valor['password_usuario'] == " "){

                                                        echo "<div class='text-center red-text'>campos incorrectos</div>";

                                                    }

                                                }
                                            }


                                            ?>
                                        </div>
                                    </div>
                                </form> 
                               
                                <div>&nbsp;</div>
                                <form action="/view/cotizaciones.php" method="post">
                                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                        
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <h3 class="white-text">
                                                        <i class="fa fa-file-text-o white-text"></i> COTIZACIÓN</h3>
                                                    <hr class="hr-light">
                                                </div>
                                                <div class="md-form">
                                                    
                                                        <div class="form-group">
                                    
                                                                <div class="input-group mb-3">
                                                                    
                                                                    <select class="custom-select" id="cotizacionOrigen" name="cotizacionOrigen">
                                                                            <option selected>Origen...</option>
                                                                            <option value="ibague">Ibague</option>
                                                                            <option value="bogota">Bogota</option>
                                                                            <option value="paipa">Paipa</option>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                
                                                </div>
                                                <div class="md-form">
                                                    
                                                        <div class="form-group">
                                                            
                                                                <div class="input-group mb-3">
                                                                    
                                                                    <select class="custom-select" id="cotizacionDestino" name="cotizacionDestino">
                                                                            <option selected>Destino...</option>
                                                                            <option value="tunja">Tunja</option>
                                                                            <option value="bogota">Bogota</option>
                                                                            <option value="paipa">Paipa</option>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                    
                                                </div>
                                                <div class="text-center mt-4 POST">
                                                    <button class="btn btn-primary" name="cotizar">COTIZAR</button>
                                                    
            
                                                </div>
                                                
                                                
                                            </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-6 col-xl-5 mb-4">
                              
                                <div>&nbsp;</div>
                                
                                <form class="p-6" method="post" action="">                    
                                    <div class="card wow fadeInRight" data-wow-delay="0.3s"  >
                                        <div class="card-body" >
                                            
                                            <div class="text-center">
                                                <h3 class="white-text">
                                                    <i class="fa fa-pencil-square-o"></i> REGISTRARSE</h3>
                                                <hr class="hr-light">
                                            </div>
                                          
                                            <div class="md-form">
                                                <i class="fa fa-user prefix white-text active"></i>
                                                <label  class="active">Tu nombre*</label>
                                                <input type="text" id="name" class="white-text form-control" name="name">
                                                
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-at prefix white-text active"></i>
                                                <label  class="active">Email*</label>
                                                <input type="email" id="registro_email" class="white-text form-control" name="registro_email">
                                                
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-lock prefix white-text active"></i>
                                                <label >Password*</label>
                                                <input type="password" id="password" class="white-text form-control" name="password">
                                                
                                            </div>
                                            <div class="text-center mt-4">
                                                <button class="btn btn-primary" name="enviar">Enviar</button>
                                                
                                            </div>
                                            

                                        </div>
                                        
                                    </div>
                                    <?php

                                    include("../connection/Connection.php");

                                    $nombre = "";
                                    $email = "";
                                    $password = "";



                                    if (isset($_POST['enviar'])) {

                                        $nombre = $_POST['name'];
                                        $email = $_POST['registro_email'];
                                        $password = $_POST['password'];

                                        if ($nombre == " " || $email == "" || $password == "") {
                                            echo "<div class='text-center red-text' >*Los campos son obligatorios</div>";
                                        } else {

                                            mysqli_query($connect, "INSERT INTO usuario (nombre_usuario, email_usuario, password_usuario) VALUES ('$nombre', '$email', '$password')");

                                            echo "<div class='text-center white-text' >Registro completo</div>";

                                        }

                                    }

                                    ?>
                                    <div>&nbsp;</div>
                                    <div>&nbsp;</div>
                                    <div>&nbsp;</div>
                                    
                                    <h1 class="h1-responsive font-weight-bold wow fadeInLeft white-text font-oswald" data-wow-delay="0.3s">Bienvenidos a
                                        <u>MYBUS LLC</u>
                                    </h1> 
                                </form>
                               
                                

                                
                            </div>
                        
                            
                        </div>
                        
                    </div>
                    
                
                </div>
                
               
            </div>
           
                                                
            
        
    

        <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="/js/popper.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/mdb.min.js"></script>
    </body>

</html>