<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regitrar Materias</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12 card m-4 p-4">
                <h2>Registrar Alumno</h2><hr>
                <form action="ActualizarAlumno.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $alumno["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $alumno["nombre"]; ?>" name="nombre" type="text" class="form-control" placeholder="Teclea el nombre del alumno" required>
                    </div>
                    <div class="form-group">
                        <label for="">Número de control:</label>
                        <input value="<?php echo $alumno["numero_control"]; ?>" name="nc" type="text" class="form-control" placeholder="Teclea el número de control" required>
                    </div>
                   

                    

    <script src="js/bootstrap.js"></script>
</body>
</html>