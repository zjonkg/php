<?php
$server = "localhost:3307";
$user = "root";
$password = "";
$dbname = "jondatabase";
$con = new mysqli($server, $user, $password, $dbname);

if ($con -> connect_errno){
die("Error al iniciar");
}
else echo "Conexion establecida correctamente";
?>
