<?php
/*Recibe un request post con los datos del usuario e intenta enviar un correo*/

require 'Courier.php';
require 'Responses.php';
require 'Forms.helper.php';

try{

	if( validateContact( $_POST['data'] ) && verifyCaptcha() ){
		//Enviar el correo de confirmación

		if( sendContactMail( $_POST['data'] ) ){

			response('success', 'Gracias, nos pondremos en contacto pronto.' );

		}else{
		
			throw new Exception( 'No se pudo enviar el mensaje.' );
		
		}

	}

	
}catch(Exception $e){
	
	response( 'error', $e->getMessage() );

}


?>