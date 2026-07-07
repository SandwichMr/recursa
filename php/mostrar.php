<?php
include 'db.php';

$tabla = $_GET['tabla'];
$sql = "SELECT * FROM $tabla";
$resultado = mysqli_query($conexion, $sql);

echo '<a href="../index.html">Volver</a>';
echo '<h1>Tabla: ' . $tabla . '</h1>';
echo '<table border="1" cellpadding="6">';

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo '<tr>';
    foreach ($fila as $dato) {
        echo '<td>' . $dato . '</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>
