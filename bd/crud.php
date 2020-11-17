<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : '';
$cantidad = (isset($_POST['cantidad'])) ? $_POST['cantidad'] : '';
$imagen = (isset($_POST['imagen'])) ? $_POST['imagen'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO accesorios (id_accesorio, descripcion, precio, cantidad, imagen, estado) VALUES('$id', '$descripcion', '$precio', '$cantidad', '$imagen', 1) ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id_accesorio, descripcion, precio, cantidad, imagen, estado FROM accesorios WHERE id_accesorio='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE accesorios SET descripcion='$descripcion', precio='$precio', cantidad='$cantidad', imagen='$imagen' WHERE id_accesorio='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
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
    case 4: //desactivar
        $consulta = "UPDATE accesorios SET estado=0 WHERE id_accesorio='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
            
        $consulta = "SELECT id_accesorio, descripcion, precio, cantidad, imagen, estado FROM accesorios WHERE id_accesorio='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;

    case 5: //activar
        $consulta = "UPDATE accesorios SET estado='1' WHERE id_accesorio='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
                
        $consulta = "SELECT id_accesorio, descripcion, precio, cantidad, imagen, estado FROM accesorios WHERE id_accesorio='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
?>