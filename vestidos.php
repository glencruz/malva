<?php require_once('admin/config.php'); ?>


<?php

include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id_vestido, codigo, descripcion, precio, imagen, estado FROM vestidos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$vestidos=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>




<?php require("views/vestidos.view.php"); ?>