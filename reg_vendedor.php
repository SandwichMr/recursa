<?php
include "conexion.php";

$nombre = $_POST["nombre_vendedor"];
$apellido = $_POST["apellido_vendedor"];
$telefono = $_POST["telefono_vendedor"];
$correo = $_POST["correo_vendedor"];
$edad = $_POST["edad_vendedor"];

$sql = "INSERT INTO vendedores(nombre_vendedor, apellido_vendedor, telefono_vendedor, correo_vendedor, edad_vendedor)
VALUES('$nombre', '$apellido', '$telefono', '$correo', '$edad')";

if (mysqli_query($conexion, $sql)) {
    echo "<script>alert('Vendedor registrado'); window.location.href='m_vendedores.php';</script>";
} else {
    echo "<script>alert('Error al registrar'); window.location.href='vendedores.html';</script>";
}
?>
