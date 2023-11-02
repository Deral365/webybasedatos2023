<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar Alumno</title>
</head>
<body>
<?php 
        include 'menu.php';
        include 'conexion.php';

        $id = $_GET['id'];
        $sql = "SELECT * FROM alumnos WHERE id=".$id;
        $datos = $conexion -> query($sql);
        $alumno = $datos->fetch_assoc();
    ?>
 <div class="container">
        <div class="row">
          <h2>Registrar alumno</h2>
            <div class="col-12 card m-4 p-4">
              <form action="actualizarRegistro.php" method="POST"></form>
              <input type="hidden" name="id" value=""<?php echo $alumno["id"];?> >
              <div class="form-group">
                <label for="">Nombre:</label>
                <input  name="nombre" type="text" <?php echo $alumno["nombre"];?> class="form-control" placeholder="Teclea el nombre" requiered>
              </div>
              <div class="form-group" requiered>
                <label for="">Numero de control:</label>
                ="nombre" type="text" <?php echo $alumno["nombre"];?> class="form-control" placeholder="Teclea el nombre" requiered>
              <div class="form-group" requiered>
                <label for="">Semestre:</label>
                ="nombre" type="text" <?php echo $alumno["nombre"];?> class="form-control" placeholder="Teclea el nombre" requiered>
              </div>
              <div class="form-group" requiered>
                <label for="">Edad:</label>
                ="nombre" type="text" <?php echo $alumno["nombre"];?> class="form-control" placeholder="Teclea el nombre" requiered>
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
    <div class="container">
        <div class="row">
            <div class="col-12 card m-4 p-4">
                <h2></h2>
                <?php if($datos->num_rows > 0){ ?>
                    <div class="table-responsive card m-4 p-2">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Número de control</th>
                                <th>Semestre</th>
                                <th>Edad</th>
                                <th>Turno</th>
                                <th>Sexo</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php while($registro=$datos->fetch_assoc()){ ?>
                            <tr>
                        <td> <?php echo $registro["id"]; ?> </td>
                        <td> <?php echo $registro["nombre"]; ?> </td>
                        <td> <?php echo $registro["numero_control"]; ?> </td>
                        <td> <?php echo $registro["semestre"]; ?> </td>
                        <td> <?php echo $registro["edad"]; ?> </td>
                        <td> <?php echo $registro["turno"]; ?> </td>
                        <td> <?php echo $registro["sexo"]; ?> </td>
               
                    <td>
                  <a href="" class="btn btn-sm btn-primary"> Editar </a>
                  <a href="eliminarAlumno.php? id=<?php echo $registro["id"]; ?>" class="btn btn-sm btn-primary"> Eliminar </a>
                   </td>
                 </tr>
               <?php } ?>
            </tbody>
        </table>
    </div>
    <?php }else { ?>
             <h2 class="m-4">No Existe datos en alumnos en la base de daatos</h2>
    <?php } ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>