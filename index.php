<?php require_once('admin/config.php'); ?>

<?php $isHome = true ;

include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM vestidos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$vestidos=$resultado->fetchAll(PDO::FETCH_ASSOC);


$consulta2 = "SELECT * FROM accesorios";
$resultado2 = $conexion->prepare($consulta2);
$resultado2->execute();
$accesorios=$resultado2->fetchAll(PDO::FETCH_ASSOC);
?>


<?php require("views/index.view.php"); ?>