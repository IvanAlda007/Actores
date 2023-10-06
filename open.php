<?php
    $conexion = new mysqli("localhost","root","","personas");
    if($conexion){
        echo "conexion exitosa";
    }else{
        echo "fallo la conexion";
    }

?>