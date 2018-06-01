<?php



        $host = "localhost";
        $user = "root";
        $password = "";
        $dataBase = "mybus";

        $tablaUser = "usuario";
        

        $connect = new mysqli($host, $user, $password, $dataBase);

        if($connect->connect_errno){
            echo "<label class='white-text'>No se ha podido establecer conexión con la base de datos</label>";
            exit();
        }



?>