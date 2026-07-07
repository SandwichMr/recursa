<?php
include "conexion.php";
$sql = "SELECT * FROM pedidos";
$resultado = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
<main class="container my-4 caja">
<h1>Pedidos</h1>
<table class="table table-bordered">
<tr><th>ID</th><th>ID producto</th><th>ID usuario</th><th>ID vendedor</th><th>Fecha</th><th>Editar</th><th>Eliminar</th></tr>
<?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
<tr>
    <td><?php echo $fila["id_pedido"]; ?></td>
    <td><?php echo $fila["id_producto"]; ?></td>
    <td><?php echo $fila["id_usuario"]; ?></td>
    <td><?php echo $fila["id_vendedor"]; ?></td>
    <td><?php echo $fila["fecha_pedido"]; ?></td>
    <td>
        <form action="upd_pedido.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $fila["id_pedido"]; ?>">
            <input name="id_producto" value="<?php echo $fila["id_producto"]; ?>">
            <input name="id_usuario" value="<?php echo $fila["id_usuario"]; ?>">
            <input name="id_vendedor" value="<?php echo $fila["id_vendedor"]; ?>">
            <button class="btn btn-warning btn-sm">Actualizar</button>
        </form>
    </td>
    <td>
        <form action="del_pedido.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $fila["id_pedido"]; ?>">
            <button class="btn btn-danger btn-sm">Eliminar</button>
        </form>
    </td>
</tr>
<?php } ?>
</table>
<a class="btn btn-dark" href="pedidos.html">Nuevo pedido</a>
<a class="btn btn-secondary" href="index.html">Inicio</a>
</main>
</body>
</html>
