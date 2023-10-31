<?php

$server = "localhost";
$user = "root";
$password = "123456";
$basededatos="cetis107";

$conexion = new mysqli($server,$user,$password,$basededatos);


if($conexion->conect_error){
    die("Fallo la conexion" .$conexion->connect_error);
}

?>