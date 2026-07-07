<?php
include "conexion.php";

$id = $_POST["id"];
$id_vendedor = $_POST["id_vendedor"];
$nombre = $_POST["nombre_producto"];
$categoria = $_POST["categoria_producto"];
$precio = $_POST["precio_producto"];

$sql = "UPDATE productos SET id_vendedor='$id_vendedor', nombre_producto='$nombre', categoria_producto='$categoria', precio_producto='$precio' WHERE id_producto='$id'";

mysqli_query($conexion, $sql);
header("Location: m_productos.php");
?>
