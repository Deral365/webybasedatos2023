<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar alumnos</title>
</head>
<body>
    <?php include 'menu.php';?>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
              <form action="" method="POST"></form>
              <div class="form-group" requiered>
                <label for="">Nombre:</label>
                <input  name="nc" type="text" class="form-control" placeholder="Teclea el nombre">
              </div>
              <div class="form-group" requiered>
                <label for="">Numero de control:</label>
                <input  name="nc" type="text" class="form-control" placeholder="Teclea el numero de control">
              </div>
              <div class="form-group" requiered>
                <label for="">Semestre:</label>
                <input  name="semestre" type="number" class="form-control" placeholder="Teclea el semestre">

              </div>
              <div class="form-group" requiered>
                <label for="">Edad:</label>
                <input  name="edad" type="number" class="form-control" placeholder="Teclea la edad">

              </div>
              <div class="form-group" requiered>
                <label for="">Turno:</label>
                <select name="turno" class="form-control">
                    <option value="">Selecciona el turno</option>
                    <option value="MATUTINO"></option>
                    <option value="VESPERYINO"></option>
                </select>

              </div>
              <div class="form-group" requiered>
                <label for="">Sexo:</label>
                <select name="turno" class="form-control">
                    <option value="">Selecciona el sexo</option>
                    <option value="0">FEMENINO</option>
                    <option value="1">MASCULINO</option>
                    <option value="2">Prefiero no responder</option>
                </select>

              </div>
              <form action=""></form>
            </div>

        </div>
    </div>

    <footer>
        <hr>
        CETIS 107 &copy; 2023
    </footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>