<?php
include "conexion.php";

$id = $_POST["id"];
$nombre = $_POST["nombre_vendedor"];
$apellido = $_POST["apellido_vendedor"];
$telefono = $_POST["telefono_vendedor"];
$correo = $_POST["correo_vendedor"];
$edad = $_POST["edad_vendedor"];

$sql = "UPDATE vendedores SET nombre_vendedor='$nombre', apellido_vendedor='$apellido', telefono_vendedor='$telefono', correo_vendedor='$correo', edad_vendedor='$edad' WHERE id_vendedor='$id'";

mysqli_query($conexion, $sql);
header("Location: m_vendedores.php");
?>
