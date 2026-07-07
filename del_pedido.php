<?php
include "conexion.php";

$id = $_POST["id"];
$sql = "DELETE FROM pedidos WHERE id_pedido='$id'";

mysqli_query($conexion, $sql);
header("Location: m_pedidos.php");
?>
