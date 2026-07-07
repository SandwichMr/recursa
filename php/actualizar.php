<?php
include 'db.php';

$id = $_POST['id_producto'];
$nombre = $_POST['nombre_producto'];
$categoria = $_POST['categoria_producto'];
$precio = $_POST['precio_producto'];

$sql = "UPDATE productos SET nombre_producto = '$nombre', categoria_producto = '$categoria', precio_producto = '$precio' WHERE id_producto = '$id'";

if (mysqli_query($conexion, $sql)) {
    echo 'Producto actualizado con UPDATE WHERE';
} else {
    echo 'Error al actualizar';
}
?>
