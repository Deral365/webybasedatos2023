<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Materias</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    
<?php 
        include 'menu.php';   ?> 
    <div class="container">
        <div class="row">
            <div class="col-12 card p-4">
                <form action="">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea la Materia">
                    </div>
                    <div class="form-group">
                    <label for="">Semestre:</label>
                    <input type="number" class="form-control" name="semestre" placeholder="Teclea el Semestre">
                    </div>

                    <div class="form-group">
                        <label for="">Especialidad:</label>
                    <select name="especialidad" class="form-control">
                    <option value="">selecciona una especialidad</option>
                    <option value="PROGRAMACION">PROGRAMACION</option>
                    <option value="ELECTRONICA">ELECTRONICA</option>
                    <option value="CONSTRUCCION">CONSTRUCCION</option>
                    <option value="CONTABILIDAD">CONTABILIDAD</option>
                    <option value="OFIMATICA">OFIMATICA</option>
                    </select>
                    </div>
                    </div>
                    <input type="submit" class="btn btn-primary">
                    <a href="registrarMaterias.php" class="btn btn-danger">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
  

    <script src="js/bootstrap.bundle.js"></script>  
</body>
</html>