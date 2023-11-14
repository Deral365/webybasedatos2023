<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Materias</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
   
</head>
<body>
    <?php
       include 'menu.php'; 
       include 'conexion.php'; 
       //Recuperamos los datos de la base de datos 
       $sql_alumnos = "SELECT * FROM alumnos";
       $sql_materias=  "SELECT * FROM materias"

       $datos_alumnos = $conexion->query($sql_alumnos);
       $datos_materias = $conexion->query($sql_materias);

?>

<div class="container">
<div class="row">
    <div class="col-12 card p-4 m-2">
        <h2>Asignar materias a alumnos</h2><hr>
        <form action="">
            <label for="">Alumno:</label>
            <select name="alumno" class="form-control">
                <option value="">Selecciona el alumno:</option>
             <?php
             if($datos_alumnos->num_rows > 0){
                while ($registro = $datos_alumnos->fetch_assoc()) { ?>
                   <option value="<?php echo $resgistro["id"]; ?>"><?php echo $resgitro["nombre"]; ?></option>
                   <?php
                }?>
            <?php }?>
            </select><br>
            <h3>Slecciona las Materias:</h3>
            <?php if($datos_materias->rum_rows > 0){
                 while ($registro = $datos_alumnos->fetch_assoc()) { ?>
                <p><input type="checkbox" name="materias[]" value="<?php echo $resgistro["id"]; ?>"><?php echo 

            }
        </form>
    </div>
</div>
</div>
</body>
</html>