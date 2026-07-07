<?php
include 'db.php';

$tabla = $_POST['tabla'];

if ($tabla == 'usuarios') {
    $sql = "INSERT INTO usuarios (nombre_usuario, apellido_usuario, telefono_usuario, edad_usuario, correo_usuario)
            VALUES ('$_POST[nombre_usuario]', '$_POST[apellido_usuario]', '$_POST[telefono_usuario]', '$_POST[edad_usuario]', '$_POST[correo_usuario]')";
}

if ($tabla == 'vendedores') {
    $sql = "INSERT INTO vendedores (nombre_vendedor, apellido_vendedor, telefono_vendedor, correo_vendedor, edad_vendedor)
            VALUES ('$_POST[nombre_vendedor]', '$_POST[apellido_vendedor]', '$_POST[telefono_vendedor]', '$_POST[correo_vendedor]', '$_POST[edad_vendedor]')";
}

if ($tabla == 'productos') {
    $sql = "INSERT INTO productos (id_vendedor, nombre_producto, categoria_producto, precio_producto)
            VALUES ('$_POST[id_vendedor]', '$_POST[nombre_producto]', '$_POST[categoria_producto]', '$_POST[precio_producto]')";
}

if ($tabla == 'pedidos') {
    $sql = "INSERT INTO pedidos (id_producto, id_usuario, id_vendedor)
            VALUES ('$_POST[id_producto]', '$_POST[id_usuario]', '$_POST[id_vendedor]')";
}

if (mysqli_query($conexion, $sql)) {
    echo 'Registro guardado con INSERT INTO';
} else {
    echo 'Error al guardar';
}
?>
