<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
$path = 'uploads/vestidos/';

// Recepción de los datos enviados mediante POST desde el JS   
$codigo = (isset($_POST['codigo'])) ? $_POST['codigo'] : '';
$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : '';
$cantidadS = (isset($_POST['cantidadS'])) ? $_POST['cantidadS'] : '';
$cantidadM = (isset($_POST['cantidadM'])) ? $_POST['cantidadM'] : '';
$cantidadL = (isset($_POST['cantidadL'])) ? $_POST['cantidadL'] : '';
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
        $data['normal']=$resultado->fetchAll(PDO::FETCH_ASSOC);

        $consulta = "SELECT cantidad FROM rel_tallas WHERE id_talla = 1 ORDER BY id_rel DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['chica']=$resultado->fetchAll(PDO::FETCH_ASSOC);

        $consulta = "SELECT cantidad FROM rel_tallas WHERE id_talla = 2 ORDER BY id_rel DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['mediana']=$resultado->fetchAll(PDO::FETCH_ASSOC);

        $consulta = "SELECT cantidad FROM rel_tallas WHERE id_talla = 3 ORDER BY id_rel DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['grande']=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        if($imagen != 1){
            $consulta = "UPDATE vestidos SET codigo='$codigo', descripcion='$descripcion', precio='$precio', imagen='$imagen' WHERE id_vestido='$id' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();        
        }else{
            $consulta = "UPDATE vestidos SET codigo='$codigo', descripcion='$descripcion', precio='$precio' WHERE id_vestido='$id' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
        }
        $consulta = "UPDATE rel_tallas SET cantidad='$cantidadS' WHERE id_vestido='$id' AND id_talla = 1";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $consulta = "UPDATE rel_tallas SET cantidad='$cantidadM' WHERE id_vestido='$id' AND id_talla = 2";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $consulta = "UPDATE rel_tallas SET cantidad='$cantidadL' WHERE id_vestido='$id' AND id_talla = 3";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $consulta = "SELECT id_vestido, codigo, descripcion, precio, imagen, estado FROM vestidos WHERE id_vestido='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['normal']=$resultado->fetchAll(PDO::FETCH_ASSOC);

        $consulta = "SELECT cantidad FROM rel_tallas WHERE id_talla = 1 AND id_vestido='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['chica']=$resultado->fetchAll(PDO::FETCH_ASSOC);

        $consulta = "SELECT cantidad FROM rel_tallas WHERE id_talla = 2 AND id_vestido='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['mediana']=$resultado->fetchAll(PDO::FETCH_ASSOC);

        $consulta = "SELECT cantidad FROM rel_tallas WHERE id_talla = 3 AND id_vestido='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['grande']=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM vestidos WHERE id_vestido='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['normal']=$resultado->fetchAll(PDO::FETCH_ASSOC);                           
        break;
    case 4: //desactivar
        $consulta = "UPDATE vestidos SET estado=0 WHERE id_vestido='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
            
        $consulta = "SELECT id_vestido, codigo, descripcion, precio, imagen, estado FROM vestidos WHERE id_vestido='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['normal']=$resultado->fetchAll(PDO::FETCH_ASSOC);

        $consulta = "SELECT cantidad FROM rel_tallas WHERE id_talla = 1 AND id_vestido='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['chica']=$resultado->fetchAll(PDO::FETCH_ASSOC);

        $consulta = "SELECT cantidad FROM rel_tallas WHERE id_talla = 2 AND id_vestido='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['mediana']=$resultado->fetchAll(PDO::FETCH_ASSOC);

        $consulta = "SELECT cantidad FROM rel_tallas WHERE id_talla = 3 AND id_vestido='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['grande']=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;

    case 5: //activar
        $consulta = "UPDATE vestidos SET estado='1' WHERE id_vestido='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
                
        $consulta = "SELECT id_vestido, codigo, descripcion, precio, imagen, estado FROM vestidos WHERE id_vestido='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['normal']=$resultado->fetchAll(PDO::FETCH_ASSOC);

        $consulta = "SELECT cantidad FROM rel_tallas WHERE id_talla = 1 AND id_vestido='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['chica']=$resultado->fetchAll(PDO::FETCH_ASSOC);

        $consulta = "SELECT cantidad FROM rel_tallas WHERE id_talla = 2 AND id_vestido='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['mediana']=$resultado->fetchAll(PDO::FETCH_ASSOC);

        $consulta = "SELECT cantidad FROM rel_tallas WHERE id_talla = 3 AND id_vestido='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data['grande']=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;

    
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
?>