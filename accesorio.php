<?php require_once('admin/config.php'); ?>

<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
   

}else{
    header('Location:'.RUTA);
   
}
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM accesorios WHERE id_accesorio LIKE '".$id."'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$accesorios=$resultado->fetchAll(PDO::FETCH_ASSOC);

$consulta2 = "SELECT * FROM accesorios";
$resultado2 = $conexion->prepare($consulta2);
$resultado2->execute();
$accesorios2=$resultado2->fetchAll(PDO::FETCH_ASSOC);
?>


<?php require("views/accesorio.view.php"); ?>