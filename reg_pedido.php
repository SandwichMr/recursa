<?php
include "conexion.php";

$id_producto = $_POST["id_producto"];
$id_usuario = $_POST["id_usuario"];
$id_vendedor = $_POST["id_vendedor"];

$sql = "INSERT INTO pedidos(id_producto, id_usuario, id_vendedor)
VALUES('$id_producto', '$id_usuario', '$id_vendedor')";

if (mysqli_query($conexion, $sql)) {
    echo "<script>alert('Pedido registrado'); window.location.href='m_pedidos.php';</script>";
} else {
    echo "<script>alert('Error al registrar'); window.location.href='pedidos.html';</script>";
}
?>
