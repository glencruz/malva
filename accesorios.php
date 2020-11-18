<?php require_once('admin/config.php'); ?>


<?php

include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta2 = "SELECT id_accesorio, descripcion, precio, cantidad, imagen, estado FROM accesorios";
$resultado2 = $conexion->prepare($consulta2);
$resultado2->execute();
$accesorios=$resultado2->fetchAll(PDO::FETCH_ASSOC);

?>


<?php require("views/accesorios.view.php"); ?>