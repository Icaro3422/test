<?php

include("../connection/Connection.php");

$origen = isset($_POST['cotizacionOrigen']) ? $_POST['cotizacionOrigen'] : '';
$destino = isset($_POST['cotizacionDestino']) ? $_POST['cotizacionDestino'] : '';

if (isset($_POST['cotizar'])) {


    if ($origen == $destino) {
        echo "<div class='red-text text-center'>debe escoger ciudades diferentes</div>";

    }



}

?>



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
            <div class="row justify-content-md-center">
                <div class="col-md-6 col-xl-5 mb-4">
                   
                    <div>&nbsp;</div>
                    <form class="card wow fadeInRight" data-wow-delay="0.3s" style="margin-top: 55px" method="POST">
                        <div class="card-body" >
                            
                            <div class="text-center">
                                <h3 class="white-text">
                                    <i class="fa fa-file-text-o"></i> COTIZACIÓN</h3>
                                <hr class="hr-light">
                            </div>
                           
                            <div class="md-form">
 
                               
                                <p type="text" class="white-text" aria-label="Username">
                                    <span > Origen: </span> <?php echo $origen; ?>
                                </p>
                                
                                
                                   
                            </div>
                            <div class="md-form">
                                    
                                            
                                <p type="text" class="white-text" aria-label="Username">
                                    <span > Destino: </span> <?php echo $destino; ?>
                                </p>
                                   
                            </div>
                            <hr class="hr-light">
                            <?php
                            
                                
                                $consulta = mysqli_query($connect, "SELECT * FROM ruta WHERE origen_ciudad='$origen'");
                                $vector = mysqli_fetch_row($consulta);

                            


                                $o_ciudad = $vector[2];
                                $d_ciudad = $vector[3] ;
                                $costo = $vector[5];
                                $total=0;

                        

                                
                                if(strcasecmp($d_ciudad, $destino)){

                                    $resultado = mysqli_query($connect, "SELECT * FROM ruta WHERE origen_ciudad='$d_ciudad' AND destino_ciudad='$destino'");
                                    $arreglo = mysqli_fetch_row($resultado);
                                    $ciudadDeTrasbordo = $arreglo[2];
                                    $ciudadDeDestinoFinal = $arreglo[3] ;
                                    $total = $arreglo[5];

                                    echo "<div class='md-form'>";
                                    echo "<br><p type='text' class='white-text' aria-label='Username'>";
                                    echo "<br><span> Transbordo : </span> sí </p>";
                                    echo "<p type='text' class='white-text'>transbordo en $ciudadDeTrasbordo" . "</p>";
                                    echo "<br></div>";
                                    
                        
                                }else{

                                    echo "<div class='md-form'>";
                                    echo "<br><p type='text' class='white-text' aria-label='Username'>";
                                    echo "<br><span> Transbordo : </span> no </p>";
                                    echo "<br></div>";

                                }
             
                            
                            ?>
                             <hr class="hr-light">
                            <div class="md-form">
                                <p type="text" class="white-text" aria-label="Username">
                                    <span > Total: </span> <?php echo $total+$costo; ?>
                                </p>
                            </div>
                            <hr class="hr-light">
                            <h6 class="text-center white-text">*precio por persona*</h6>
                            <hr class="hr-light">
                            <div class="text-center mt-4 ">
                                <button class="btn btn-primary" ><a href="index.php" class="white-text"> <i class="fa fa-arrow-left white-text"></i> Regresar</a></button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div> 
    </header>   


    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/mdb.min.js"></script>
</body>
</html>
