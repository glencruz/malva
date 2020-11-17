<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Vestidos - Malva Studio</title>

		<meta property="og:url"                content="..." />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="..." />
		<meta property="og:description"        content="..." />
		<meta property="og:image"              content="..." />
		<?php echo $favicon; ?>
		<?php echo $normalize_css; ?>
		<?php echo $boostrap_v4_css ?>

		<!-- Font awesome -->
		<?php echo $font_awesome_css; ?>
		<!-- CSS own files -->
		<?php echo $own_file_css; ?>
		
		<?php echo $google_analitycs; ?>
		<?php echo $jquery_js;  ?>
		<?php echo $registrousuario;  ?>
	</head>
	<body>

        <?php require("views/navbar.view.php"); ?>  
        <div class="container-fluid">
		<div class="container">
			<h2 class="text-center" id="title">Registro/Inicio de Sesión</h2>
			
 			<hr>
			<div class="row">
				<div class="col-md-5">
 					<form role="form" method="post" id="ingresarUsuario" >
						<fieldset>							
							<h2> NUEVO CLIENTE MALVA.</h2>	
 							
							<div class="form-group">
							<p class="text-uppercase pull-center"> Ingrese sus datos.</p>	

							</div>
							<div class="form-group">
								<input type="text" name="nombre" id="nombre" class="form-control input-lg" placeholder="Nombre">
							</div>

							<div class="form-group">
								<input type="text" name="apellido" id="apellido" class="form-control input-lg" placeholder="Apellido">
							</div>

							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña">
							</div>
								<div class="form-group">
								<input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Confirmar contraseña">
							</div>

								<div class="form-group">
								<input type="number" name="telefono" id="telefono" class="form-control input-lg" placeholder="Numero telefonico">
							</div>

							<div class="form-group">
								<input type="number" name="cp" id="cp" class="form-control input-lg" placeholder="Codigo Postal">
							
							</div>

							<div class="form-group">
								<input type="text" name="ciudad" id="ciudad" class="form-control input-lg" placeholder="Ciudad">
							</div>
							<div class="form-group">
								<input type="text" name="estado" id="estado" class="form-control input-lg" placeholder="Estado">
							</div>
							<div class="form-group">
								<input type="text" name="colonia" id="colonia" class="form-control input-lg" placeholder="Colonia">
							</div>
							<div class="form-group">
								<input type="text" name="calle" id="calle" class="form-control input-lg" placeholder="Dirección">
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<input type="text" name="nint" id="nint" class="form-control input-lg" placeholder="Numero Interior">
									</div>
									<div class="col-md-6">
										<input type="text" name="next" id="next" class="form-control input-lg" placeholder="Numero Exterior">
									</div>
								</div>
									
							</div>

							<div class="form-check">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  Aceptar política y términos
								</label>
							  </div>
 							<div>
 									  <input type="submit" class="btn btn-lg btn-primary"  onclick="Registrar();" value="Registrar">
 							</div>
						</fieldset>
					</form>
				</div>
				
				<div class="col-md-2">
					<!-------null------>
				</div>
				
				<div class="col-md-5">
 				 		<form role="form">
						<fieldset>							
							<h2> ¿YA ERES CLIENTE MALVA?</h2>	
 							<div class="form-group">
							<p class="text-uppercase pull-center">INICIE SESIÓN CON TUS DATOS.</p>
							</div>

							<div class="form-group">
								<input type="email" name="email" id="emaili" class="form-control input-lg" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="passwordi" class="form-control input-lg" placeholder="Contraseña">
							</div>
							<div>
								<input type="submit" class="btn btn-md" value="Iniciar Sesión" onclick="iniciosesion();">
							</div>
								 
 						</fieldset>
				</form>	
				</div>
			</div>
		</div>
		
	</div>

        

        


         <?php require("views/footer.view.php"); ?>	 
		
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<?php echo $jquery_js; ?>
		<?php echo $tether_js; ?>


		<!-- Javascripts own files  -->		
		<?php echo $own_file_js; ?>


		<?php echo $bootstrap_v4_js; ?>

		<?php echo $font_awesome_js; ?>
		
	</body>
</html>