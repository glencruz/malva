


<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
$path = 'uploads/';

$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : '';
$cantidad = (isset($_POST['cantidad'])) ? $_POST['cantidad'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$opcion = (isset($_POST['opciones'])) ? $_POST['opciones'] : '';

if(isset($_FILES["file"]) && !empty($_FILES["file"]["name"]) && !empty($_FILES["file"]["name"])){
    $img = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image = rand(1000,1000000).$img;
    // check's valid format
    if(in_array($ext, $valid_extensions)) 
    { 
    $path = $path.strtolower($final_image); 
    if(move_uploaded_file($tmp,$path)) 
    {
    $imagen = $path;
    }
    }
    }else{
        $imagen = 1;}

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO accesorios (descripcion, precio, cantidad, imagen, estado) VALUES('$descripcion', '$precio', '$cantidad', '$imagen', '1') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id_accesorio, descripcion, precio, cantidad, imagen, estado FROM accesorios ORDER BY id_accesorio DESC";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        if($imagen != 1){
            $consulta = "UPDATE accesorios SET descripcion='$descripcion', precio='$precio', cantidad='$cantidad', imagen='$imagen' WHERE id_accesorio='$id' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
        }else{
            $consulta = "UPDATE accesorios SET descripcion='$descripcion', precio='$precio', cantidad='$cantidad' WHERE id_accesorio='$id' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
        }
        $consulta = "SELECT id_accesorio, descripcion, precio, cantidad, imagen, estado FROM accesorios WHERE id_accesorio='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM accesorios WHERE id_accesorio='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
