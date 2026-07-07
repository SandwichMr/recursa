<?php
include "conexion.php";
$sql = "SELECT * FROM vendedores";
$resultado = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedores</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
<main class="container my-4 caja">
<h1>Vendedores</h1>
<table class="table table-bordered">
<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Correo</th><th>Edad</th><th>Editar</th><th>Eliminar</th></tr>
<?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
<tr>
    <td><?php echo $fila["id_vendedor"]; ?></td>
    <td><?php echo $fila["nombre_vendedor"]; ?></td>
    <td><?php echo $fila["apellido_vendedor"]; ?></td>
    <td><?php echo $fila["telefono_vendedor"]; ?></td>
    <td><?php echo $fila["correo_vendedor"]; ?></td>
    <td><?php echo $fila["edad_vendedor"]; ?></td>
    <td>
        <form action="upd_vendedor.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $fila["id_vendedor"]; ?>">
            <input name="nombre_vendedor" value="<?php echo $fila["nombre_vendedor"]; ?>">
            <input name="apellido_vendedor" value="<?php echo $fila["apellido_vendedor"]; ?>">
            <input name="telefono_vendedor" value="<?php echo $fila["telefono_vendedor"]; ?>">
            <input name="correo_vendedor" value="<?php echo $fila["correo_vendedor"]; ?>">
            <input name="edad_vendedor" value="<?php echo $fila["edad_vendedor"]; ?>">
            <button class="btn btn-warning btn-sm">Actualizar</button>
        </form>
    </td>
    <td>
        <form action="del_vendedor.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $fila["id_vendedor"]; ?>">
            <button class="btn btn-danger btn-sm">Eliminar</button>
        </form>
    </td>
</tr>
<?php } ?>
</table>
<a class="btn btn-dark" href="vendedores.html">Nuevo vendedor</a>
<a class="btn btn-secondary" href="index.html">Inicio</a>
</main>
</body>
</html>
