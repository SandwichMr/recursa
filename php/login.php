<?php
include 'db.php';

$correo = $_POST['correo_usuario'];
$telefono = $_POST['telefono_usuario'];

$sql = "SELECT * FROM usuarios WHERE correo_usuario = '$correo' AND telefono_usuario = '$telefono'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo 'Inicio de sesion correcto';
} else {
    echo 'Correo o telefono incorrectos';
}
?>
