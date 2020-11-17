<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   
$codigo = (isset($_POST['codigo'])) ? $_POST['codigo'] : '';
$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : '';
$cantidadS = (isset($_POST['cantidadS'])) ? $_POST['cantidadS'] : '';
$cantidadM = (isset($_POST['cantidadM'])) ? $_POST['cantidadM'] : '';
$cantidadL = (isset($_POST['cantidadL'])) ? $_POST['cantidadL'] : '';
$imagen = (isset($_POST['imagen'])) ? $_POST['imagen'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO vestidos (codigo, descripcion, precio, imagen, estado) VALUES('$codigo', '$descripcion', '$precio', '$imagen', 1) ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        
        $consulta = "INSERT INTO rel_tallas (id_vestido, id_talla, cantidad) VALUES((SELECT MAX(id_vestido) AS id FROM vestidos), 1, '$cantidadS') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "INSERT INTO rel_tallas (id_vestido, id_talla, cantidad) VALUES((SELECT MAX(id_vestido) AS id FROM vestidos), 2, '$cantidadM') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "INSERT INTO rel_tallas (id_vestido, id_talla, cantidad) VALUES((SELECT MAX(id_vestido) AS id FROM vestidos), 3, '$cantidadL') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT id_vestido, codigo, descripcion, precio, imagen, estado FROM vestidos ORDER BY id_vestido DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE vestidos SET codigo='$codigo', descripcion='$descripcion', precio='$precio', imagen='$imagen' WHERE id_vestido='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id_vestido, codigo, descripcion, precio, imagen, estado FROM vestidos WHERE id_vestido='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM vestidos WHERE id_vestido='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);                           
        break;
    case 4: //desactivar
        $consulta = "UPDATE vestidos SET estado=0 WHERE id_vestido='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
            
        $consulta = "SELECT id_vestido, codigo, descripcion, precio, imagen, estado FROM vestidos WHERE id_vestido='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;

    case 5: //activar
        $consulta = "UPDATE vestidos SET estado='1' WHERE id_vestido='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
                
        $consulta = "SELECT id_vestido, codigo, descripcion, precio, imagen, estado FROM vestidos WHERE id_vestido='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;

    
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
?>