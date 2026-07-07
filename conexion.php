<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$basedatos = "recursa_p";

$conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);

if (!$conexion) {
    die("Error en la conexion");
}
?>
