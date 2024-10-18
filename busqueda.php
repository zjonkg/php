<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "jon";
$con = new mysqli($server, $user, $password, $database);
if ($con->connect_error) {  
    die("Error al iniciar");
}
?>
<h1>Busqueda en BD JMH</h1>
<form method="get" action="">
    <strong>Nombre: </strong>
    <input type="text" name="busqueda" size="20"> <br><br>>
    <input type="submit" name="enviar" value="Buscar">
</form> 
<br><br>


<a>RESULTADO: </a>

<?php 
if (isset($GET['enviar'])) {
    $busqueda = $GET['busqueda'];
    $consulta = $con->query("SELECT nombre, apellido FROM usuarios
    WHERE nombre like '%$busqueda'");
    while ($row = $consulta->fetch_array()) {
        echo"".$row['nombre']." ".$row['apellido']. '<br>'; 
}
}
?>
</body>
</html>
