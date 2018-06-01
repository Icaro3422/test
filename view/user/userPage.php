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

    <header class="rgba-gradient">
        <div class="rgba-gradient" style="background-size: cover">
            <div class="container">

                <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
                            <ul class="navbar-nav mr-auto">
                        
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-light" href="userPage.php">Cotizaciones
                                            <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-light" href="useRoutes.php">Rutas</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto nav-flex-icons">
                               
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item waves-effect waves-light" href="">Configuración</a>
                                        <a class="dropdown-item waves-effect waves-light" href="../index.php" >Log out <i class="fa fa-sign-out"></i></a>


                                    </div>
                                </li>
                            </ul>
                        </div>
                </nav>

                <div class="row justify-content-md-center" style="margin-top: 200px">
                    <div class="col-md-6 col-xl-5 mb-4">
                        <form  method="post">
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
                                                <div class="text-center mt-4">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#cotizar">COTIZAR</button>
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="modal fade" id="cotizar">
            <div class="modal-dialog">
                
                <form class="modal-content" method="post">
              
                    <div class="modal-header ">
                        <h5 class="modal-title" >Editar usuario</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           &times;
                        </button>
                    </div>

                    <div class="modal-body">

                        <div class="md-form">
                                        <i class="fa fa-user prefix active"></i>
                                        <label  class="active">Tu nombre*</label>
                                        <input type="text" id="name" class=" form-control" name="name">
                                                
                        </div>
                         <div class="md-form">
                                        <i class="fa fa-at prefix active"></i>
                                        <label  class="active">Email*</label>
                                        <input type="email" id="registro_email" class=" form-control" name="registro_email">
                                                
                         </div>
                     
                    </div>

                    
                   
                    <div class="modal-footer justify-content-center">
                        <a type="button" class="btn btn-primary waves-effect waves-light">Aceptar</a>
                        <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</a>
                    </div>
                </form>
               
            </div>
        </div>
       
      




    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script type="text/javascript" src="/js/mdb.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    
</body>