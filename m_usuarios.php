<?php
include "conexion.php";
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
<main class="container my-4 caja">
<h1>Usuarios</h1>
<table class="table table-bordered">
<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Edad</th><th>Correo</th><th>Editar</th><th>Eliminar</th></tr>
<?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
<tr>
    <td><?php echo $fila["id_usuario"]; ?></td>
    <td><?php echo $fila["nombre_usuario"]; ?></td>
    <td><?php echo $fila["apellido_usuario"]; ?></td>
    <td><?php echo $fila["telefono_usuario"]; ?></td>
    <td><?php echo $fila["edad_usuario"]; ?></td>
    <td><?php echo $fila["correo_usuario"]; ?></td>
    <td>
        <form action="upd_usuario.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $fila["id_usuario"]; ?>">
            <input name="nombre_usuario" value="<?php echo $fila["nombre_usuario"]; ?>">
            <input name="apellido_usuario" value="<?php echo $fila["apellido_usuario"]; ?>">
            <input name="telefono_usuario" value="<?php echo $fila["telefono_usuario"]; ?>">
            <input name="edad_usuario" value="<?php echo $fila["edad_usuario"]; ?>">
            <input name="correo_usuario" value="<?php echo $fila["correo_usuario"]; ?>">
            <button class="btn btn-warning btn-sm">Actualizar</button>
        </form>
    </td>
    <td>
        <form action="del_usuario.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $fila["id_usuario"]; ?>">
            <button class="btn btn-danger btn-sm">Eliminar</button>
        </form>
    </td>
</tr>
<?php } ?>
</table>
<a class="btn btn-dark" href="usuarios.html">Nuevo usuario</a>
<a class="btn btn-secondary" href="index.html">Inicio</a>
</main>
</body>
</html>
