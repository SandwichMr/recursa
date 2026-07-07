<?php
include "conexion.php";

$id = $_POST["id"];
$sql = "DELETE FROM productos WHERE id_producto='$id'";

mysqli_query($conexion, $sql);
header("Location: m_productos.php");
?>
