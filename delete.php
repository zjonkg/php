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
    <input type="submit" name="enviar" value="Buscar">
  </form>
  <br>

<a>Resultado: </a>

  <?php

  if (isset($_POST['enviar'])){
  $nombre = $con->real_escape_string($_POST['nombre']);
  
  if (isset($_POST['enviar'])) {
    $consulta = "DELETE FROM alumnos WHERE nombre LIKE '%$nombre%'";

    if ($con->query($consulta) === TRUE) {
      echo "Registro eliminado correctamente.";
    }else{
      echo "Registro no encontrado " . $con->error;
    }
  }
}
?>

</body>
</html>