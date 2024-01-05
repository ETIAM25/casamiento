<?php

$conexion = mysqli_connect("localhost","root", "", "iniciar sesión" );

if($conexion){
    echo"conectado exitosamente a la base de datos";
}else{
    echo "No se ha podido conectar a base de datos";
}

?>
