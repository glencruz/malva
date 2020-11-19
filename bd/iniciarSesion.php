<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   


$email = (isset($_POST['emaili'])) ? $_POST['emaili'] : '';
$password = (isset($_POST['passwordi'])) ? $_POST['passwordi'] : '';

     
	$consulta ="SELECT count(*) FROM cliente WHERE email='$email' and password='$password";
        			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);

        if($resultado>0){
                header("location:index.php");
        }else{
                echo "Error en la verificacion";
        }
       

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
?>