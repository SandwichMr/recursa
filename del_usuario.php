<?php
include "conexion.php";

$id = $_POST["id"];
$sql = "DELETE FROM usuarios WHERE id_usuario='$id'";

mysqli_query($conexion, $sql);
header("Location: m_usuarios.php");
?>
