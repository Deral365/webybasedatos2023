<?php

$server = "localhost";
$user = "root";
$password = "123456";

$conexion = new mysqli($server,$user,$password);


if($conexion->conect_error){
    die("Fallo la conexion" .$conexion->connect_error);
}

?>