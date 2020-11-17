<?php
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$cp = (isset($_POST['cp'])) ? $_POST['cp'] : '';
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';
$colonia = (isset($_POST['colonia'])) ? $_POST['colonia'] : '';
$ciudad = (isset($_POST['ciudad'])) ? $_POST['ciudad'] : '';
$calle = (isset($_POST['calle'])) ? $_POST['calle'] : '';
$nint = (isset($_POST['nint'])) ? $_POST['nint'] : '';
$next = (isset($_POST['next'])) ? $_POST['next'] : '';

		$consulta2="INSERT INTO direcciones(cp, estado, ciudad, colonia, calle, next, nint) VALUES ('$cp','$estado','$ciudad','$colonia','$calle','$next','$nint')";
		$resultado = $conexion->prepare($consulta2);
        $resultado->execute();

        $id="SELECT MAX(id_direccion) AS id FROM direcciones";
        $resultado = $conexion->prepare($id);
        $resultado->execute();
     
		$consulta ="INSERT INTO cliente(nombre, apellido, id_direccion, email, password, telefono) VALUES ('$nombre','$apellido',(SELECT MAX(id_direccion) AS id FROM direcciones),'$email','$password','$telefono')";
        			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
       

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
?>