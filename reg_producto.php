<?php
include "conexion.php";

$id_vendedor = $_POST["id_vendedor"];
$nombre = $_POST["nombre_producto"];
$categoria = $_POST["categoria_producto"];
$precio = $_POST["precio_producto"];

$sql = "INSERT INTO productos(id_vendedor, nombre_producto, categoria_producto, precio_producto)
VALUES('$id_vendedor', '$nombre', '$categoria', '$precio')";

if (mysqli_query($conexion, $sql)) {
    echo "<script>alert('Producto registrado'); window.location.href='m_productos.php';</script>";
} else {
    echo "<script>alert('Error al registrar'); window.location.href='productos.html';</script>";
}
?>
