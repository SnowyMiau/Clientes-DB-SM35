<?php
include './connection/conexion.php';

$id_cliente = $_GET['id_cliente'];
$query = "DELETE FROM clientes WHERE id_cliente = $id_cliente";

$delete = $conexion->query($query);

header('Location: ./index.php')

?>