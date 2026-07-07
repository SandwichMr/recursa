<?php
include "conexion.php";

$id = $_POST["id"];
$sql = "DELETE FROM vendedores WHERE id_vendedor='$id'";

mysqli_query($conexion, $sql);
header("Location: m_vendedores.php");
?>
