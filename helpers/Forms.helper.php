<?php

/* Validators */
function validateContact( $data ){

	foreach ($data as $key => $value) {
		switch ($key) {
			case 'name':
				if($value == ""){
					throw new Exception("Porfavor escriba su nombre.");
					return false;
				}
				break;
			case 'email':
				if($value == ""){
					throw new Exception("Porfavor escriba su correo electronico.");
					return false;
				}
				break;
			case 'subject':
				if($value == ""){
					throw new Exception("Porfavor escriba el asunto.");
					return false;
				}
				break;
			case 'message':
				if($value == ""){
					throw new Exception("Porfavor escriba su mensaje.");
					return false;
				}
				break;
			
		}
	}
	return true;

}

/* Helpers */

function verifyCaptcha(){
	$captcha = '';

	if (isset($_POST['recaptcha'])) $captcha = $_POST['recaptcha'];

	if (!$captcha){
		throw new Exception("No pudimos enviar tu mensaje, por favor verifica que se marcó correctamente el captcha.");
	}

	$secret = '6LevwNsZAAAAAANe8FsGknVGTrgVHpI2wazek_1e';
	$response = json_decode(url_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

	if($response['success'] == false){
		return false;
		throw new Exception("No se validó correctamente el recaptcha", 1);
	}else{
		return true;
	}
}

function url_get_contents ($Url) {
    if (!function_exists('curl_init')){ 
        throw new Exception("Error del servidor: extension curl desactivada");
        die();
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

function generarAssocArray($data){
	$assocArray = array();
	foreach ($data as $key => $value) {
		$assocArray[$value['name']] = $value['value'];
	}

	return $assocArray;
}


?>