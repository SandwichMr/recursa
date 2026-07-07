<?php
include "conexion.php";
$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
<main class="container my-4 caja">
<h1>Productos</h1>
<table class="table table-bordered">
<tr><th>ID</th><th>ID vendedor</th><th>Producto</th><th>Categoria</th><th>Precio</th><th>Editar</th><th>Eliminar</th></tr>
<?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
<tr>
    <td><?php echo $fila["id_producto"]; ?></td>
    <td><?php echo $fila["id_vendedor"]; ?></td>
    <td><?php echo $fila["nombre_producto"]; ?></td>
    <td><?php echo $fila["categoria_producto"]; ?></td>
    <td><?php echo $fila["precio_producto"]; ?></td>
    <td>
        <form action="upd_producto.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $fila["id_producto"]; ?>">
            <input name="id_vendedor" value="<?php echo $fila["id_vendedor"]; ?>">
            <input name="nombre_producto" value="<?php echo $fila["nombre_producto"]; ?>">
            <input name="categoria_producto" value="<?php echo $fila["categoria_producto"]; ?>">
            <input name="precio_producto" value="<?php echo $fila["precio_producto"]; ?>">
            <button class="btn btn-warning btn-sm">Actualizar</button>
        </form>
    </td>
    <td>
        <form action="del_producto.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $fila["id_producto"]; ?>">
            <button class="btn btn-danger btn-sm">Eliminar</button>
        </form>
    </td>
</tr>
<?php } ?>
</table>
<a class="btn btn-dark" href="productos.html">Nuevo producto</a>
<a class="btn btn-secondary" href="index.html">Inicio</a>
</main>
</body>
</html>
