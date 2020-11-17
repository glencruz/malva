<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   


$email = (isset($_POST['emaili'])) ? $_POST['emaili'] : '';
$password = (isset($_POST['passwordi'])) ? $_POST['passwordi'] : '';

     
	$consulta ="SELECT * FROM cliente WHERE email='$email' and password='$password";
        			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
       

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
?>