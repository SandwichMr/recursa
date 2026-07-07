<?php
include "conexion.php";

$nombre = $_POST["nombre_usuario"];
$apellido = $_POST["apellido_usuario"];
$telefono = $_POST["telefono_usuario"];
$edad = $_POST["edad_usuario"];
$correo = $_POST["correo_usuario"];

$sql = "INSERT INTO usuarios(nombre_usuario, apellido_usuario, telefono_usuario, edad_usuario, correo_usuario)
VALUES('$nombre', '$apellido', '$telefono', '$edad', '$correo')";

if (mysqli_query($conexion, $sql)) {
    echo "<script>alert('Usuario registrado'); window.location.href='m_usuarios.php';</script>";
} else {
    echo "<script>alert('Error al registrar'); window.location.href='usuarios.html';</script>";
}
?>
