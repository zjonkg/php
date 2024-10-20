<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BBDD</title>
</head>
<body>

<?php require('connection.php'); ?>

<h1>Busqueda en BD JonDatabase</h1>
  <form method="get" action="">
    <strong>Nombre: </strong>
    <input type="text" name="busqueda" size="20">
    <br>
    <input type="submit" name="enviar" value="Buscar">
  </form>
  <br>

<a>Resultado: </a>

  <?php
  if (isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];
    $consulta = $con->query("SELECT NOMBRE, APELLIDO, CURSO FROM ALUMNOS WHERE NOMBRE LIKE '%$busqueda%'");
    if ($consulta->num_rows > 0) {
        while ($row = $consulta->fetch_array()) {
            echo $row['NOMBRE'] . ' ' . $row['APELLIDO'] . ' ' . $row['CURSO'];
        }
    } else {
        echo "No se encontraron resultados para '$busqueda'.";
    }
  }
?>

</body>
</html>