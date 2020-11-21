<?php require_once('admin/config.php'); ?>

<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $descripcion=$_GET['descripcion'];
    $precio=$_GET['precio'];
    $imagen=$_GET['imagen'];
    $cantidad=1;
    session_start();
    $_SESSION["carrito"][$id]["id"]=$id;
    $_SESSION["carrito"][$id]["descripcion"]=$descripcion;
    $_SESSION["carrito"][$id]["precio"]=$precio;
    $_SESSION["carrito"][$id]["cantidad"]=$cantidad;
    $_SESSION["carrito"][$id]["imagen"]=$imagen;
   

}else if(isset($_GET['val'])){
	session_start();

}else if(isset($_GET['item'])){
	session_start();
	$id=$_GET['item'];
	unset($_SESSION["carrito"][$id]);
}

else{
    header('Location:'.RUTA);
   
}
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();




$consulta2 = "SELECT * FROM vestidos";
$resultado2 = $conexion->prepare($consulta2);
$resultado2->execute();
$vestidos2=$resultado2->fetchAll(PDO::FETCH_ASSOC);
?>


<?php require("views/carrito.view.php"); ?>