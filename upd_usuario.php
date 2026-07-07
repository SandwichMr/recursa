<?php
include "conexion.php";

$id = $_POST["id"];
$nombre = $_POST["nombre_usuario"];
$apellido = $_POST["apellido_usuario"];
$telefono = $_POST["telefono_usuario"];
$edad = $_POST["edad_usuario"];
$correo = $_POST["correo_usuario"];

$sql = "UPDATE usuarios SET nombre_usuario='$nombre', apellido_usuario='$apellido', telefono_usuario='$telefono', edad_usuario='$edad', correo_usuario='$correo' WHERE id_usuario='$id'";

mysqli_query($conexion, $sql);
header("Location: m_usuarios.php");
?>
