<?php
include 'conexion.php';

$id= $_POST["id"];
$nombre = $_POST["nombre"];
$numero_control = $_POST["nc"];
$semestre = $_POST["semestre"];
$edad = $_POST["edad"];
$turno = $_POST["turno"];
$sexo = $_POST["sexo"];

$sql ="UPDATE alumnos SET nombre='".$nombre."', numero_control='".$numero_control."',semestre=".$semestre.",
edad=".$edad.", turno='".$turno."', sexo=".$sexo." WHERE id=".$id;
?>