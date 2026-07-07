<?php
include 'db.php';

$tabla = $_POST['tabla'];
$id = $_POST['id'];

if ($tabla == 'usuarios') {
    $sql = "DELETE FROM usuarios WHERE id_usuario = '$id'";
}

if ($tabla == 'vendedores') {
    $sql = "DELETE FROM vendedores WHERE id_vendedor = '$id'";
}

if ($tabla == 'productos') {
    $sql = "DELETE FROM productos WHERE id_producto = '$id'";
}

if ($tabla == 'pedidos') {
    $sql = "DELETE FROM pedidos WHERE id_pedido = '$id'";
}

if (mysqli_query($conexion, $sql)) {
    echo 'Registro eliminado con DELETE FROM';
} else {
    echo 'Error al eliminar';
}
?>
