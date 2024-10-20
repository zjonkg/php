<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BBDD</title>
</head>
<body>

<?php require('connection.php'); ?>

<h1>Delete user</h1>
  <form method="post" action="">
    <strong>Nombre: </strong>
    <input type="text" name="nombre" size="20" required>
    <br>
    <strong>Nombre: </strong>
    <input type="text" name="nombre_enviar" size="20" required>
    <br>
    <strong>Apellido: </strong>
    <input type="text" name="apellido" size="20" required>
    <br>
    <strong>Curso: </strong>
    <input type="text" name="curso" size="20" required>
    <br>
    <input type="submit" name="enviar" value="Buscar">

  </form>
  <br>

<a>Resultado: </a>

  <?php

  if (isset($_POST['enviar'])){
  $nombre = $con->real_escape_string($_POST['nombre']);
  $nombre_enviar = $con->real_escape_string($_POST['nombre_enviar']);
  $apellido = $con->real_escape_string($_POST['apellido']);
  $curso = $con->real_escape_string($_POST['curso']);
  
  if (isset($_POST['enviar'])) {
    $consulta = "UPDATE alumnos SET NOMBRE='$nombre_enviar', APELLIDO='$apellido', CURSO='$curso' WHERE nombre like '$nombre'";

    if ($con->query($consulta) === TRUE) {
      echo "Registro modificado correctamente";
    }else{
      echo "Registro no modificado: " . $con->error;
    }
  }
}
?>

</body>
</html>