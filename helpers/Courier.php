<?php

require_once('phpMailer/class.phpmailer.php');
require_once('phpMailer/class.smtp.php');

function sendContactMail($data){
	// texto arriba 15px abajo 10px
	
	$url_site = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://'.$_SERVER["HTTP_HOST"];
	$path = $_SERVER['SERVER_NAME'];
	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = "base64";
	
	$mail->From = "malva@gmail.com";
	$mail->FromName = "Malva Studio";
	$mail->isHTML(true);

	//temporal
	/*$mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';  //mailtrap SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = '8270bb35ef0296';   //username
    $mail->Password = '160ce573aef9ed';   //password
    $mail->Port = 2525;                 //smtp port
	//temporal */


	$mail->addAddress($data['email'], $data['name']);
	$mail->addBCC("malva@gmail.com");
	
	$mail->Subject = "Contacto - Malva";
	$headers =  'From: '."malva@gmail.com"."\r\n" .
		    	'Reply-To: malva@gmail.com'.
		    	'X-Mailer: PHP/' . phpversion();
	$message = "<html>
				<body leftmargin='0' marginwidth='0' topmargin='0' marginheight='0' offset='0'>
					<center>
						<table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' style='background:#fff;'>
							<tr>
								<td align='center' valign='top'>
									<br>
									<table border='0' cellpadding='0' cellspacing='0' width='600' id='templateContainer' style='background:#fff; font-family:helvetica; font-size:12px;'>
										<tr>
											<td align='center' valign='top'>
								
												<table border='0' cellpadding='0' cellspacing='0' width='600' id='backgroundCentral'>
													<tr>
														<td class='headerContent'>
															<div style='width:100%; margin: 0 auto; padding-top:20px; text-align:center;'>
																<a href='https://yoco.ws/laminex'>
																	<img src='https://yoco.ws/laminex/img/header-mail.png' alt='...'>
																</a>
													
															</div>
														</td>
													</tr>
													<tr>
														<td valign='top'>
															<div style='padding:10px;color: #000000;'>
																<div style='text-align:center; width:100%;  border-top: 1px solid #a29c9c;'>
																	<h2 style='color: #000000; '>Gracias por escribirnos, esta es la información que nos proporcionó:</h2>
																</div>
																<div style='text-align:center; font-size:15px;'>
																	
																Nombre: ".$data['name']."<br>
																Correo electrónico: ".$data['email']."<br>
																Asunto: ".$data['subject']."<br>
																Mensaje: ".$data['message']."<br>

																</div>

																<div style='text-align:center; font-size:10px;'>
																	Nos pondremos en contacto pronto.
																	<br><br>
																</div>


															</div>
														</td>
													</tr>
										
												</table>
								
											</td>
										</tr>
							
									</table>
									<br />
								</td>
							</tr>
						</table>
					</center>
				</body>
			</html>";
	$mail->Body = $message;
	$mail->AltBody = $headers."\n\n".$message;
	if(!$mail->Send()) {
		error_log($mail->ErrorInfo);
		return false;
	} else {
		return true;
	}
}


?>