<?php
include "conexion.php";

$id = $_POST["id"];
$id_producto = $_POST["id_producto"];
$id_usuario = $_POST["id_usuario"];
$id_vendedor = $_POST["id_vendedor"];

$sql = "UPDATE pedidos SET id_producto='$id_producto', id_usuario='$id_usuario', id_vendedor='$id_vendedor' WHERE id_pedido='$id'";

mysqli_query($conexion, $sql);
header("Location: m_pedidos.php");
?>
