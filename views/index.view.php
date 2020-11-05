<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Inicio - Laminex</title>

		<meta property="og:url"                content="..." />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="..." />
		<meta property="og:description"        content="..." />
		<meta property="og:image"              content="..." />

		<meta name="root-url" content="<?php echo RUTA ?>" />
		
		<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
		
		<?php echo $favicon; ?>
		<?php echo $normalize_css; ?>
		<?php echo $boostrap_v4_css ?>

		<!-- Font awesome -->
		<?php echo $font_awesome_css; ?>
		<!-- CSS own files -->
		<?php echo $own_file_css; ?>
		
		<?php echo $google_analitycs; ?>


	</head>
	<body>

		<?php require("views/navbar.view.php"); ?>


		<section class="banner" id="home">
			<div class="image">
				<figure>
					<img src="<?php echo $page['data'][0]['banner']['data']['full_url']  ?>"class="d-none d-md-block w-100" alt="...">
					<img src="<?php echo $page['data'][0]['banner_mobile']['data']['full_url']  ?>" class="d-block d-md-none w-100" alt="...">
					
				</figure>
			</div>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-11 offset-md-1">
							<h1 class="title txt-stroke white v2 mb-5">
							<?php echo $page['data'][0]['titulo_banner'] ?>
							</h1>

							<h2 class="title v2 white mb-5">
							<?php echo $page['data'][0]['subtitulo'] ?>
							</h2>
						</div>
						<div class="col-md-5 offset-md-1" >
							<div class="paragraph white mb-4">
							<?php echo $page['data'][0]['cuerpo_banner'] ?>
							</div>

							<a href="#contacto" class="ancla orange "> Contáctanos <img class="ancla hright" src="<?=RUTA?>sprites/hright.svg" alt=""></a>
						</div>

					</div>
				</div>			
			</div>
		</section>




		<section class="servicios" id="servicios">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 offset-md-1">
						<div class="row">
							<div class="puntos"> </div>
							<div class="ml-4">
								<h1 class="title txt-stroke blue">
									SERVICIOS 
								</h1>
								<h2 class="title blue">
									LAMINEX
								</h2>
							</div>	
						</div>						
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-md-4 offset-md-1">		
					<?php foreach ($servicios['data'] as $key => $servicio): ?>
						<div class="d-flex align-items-center mt-3">
							<figure>
								<img src=" <?php echo $servicio['icono']['data']['full_url'] ?> " alt="">
							</figure>

							<div class="paragraph v2 black ml-5	">
								<?php echo $servicio['texto'] ?>
							</div>
						</div>
						<?php endforeach ?>
						
					</div>

					<div class="col-md-4 p-0 offset-md-2  lottie-animation" data-animation-name="laminex" data-loop="0">
						<!-- <figure class="sombra">
							<img src=" <?php echo $page['data'][0]['imagen_servicios']['data']['full_url'] ?>" alt="" class="img-fluid mw">
						</figure> -->
					</div>
				</div>


			</div>
		</section>


		<section class="strip">
			<div class="container-fluid">
				<div class="row justify-content-around">
					<div class="col-md-10 mx-auto">
						<div class="row justify-content-around">
						<?php foreach ($strips['data'] as $key => $strip): ?>
							<div class="col-md-4 text-center ">
								<figure class="mb-5">
									<img src="<?php echo $strip['icono']['data']['full_url'] ?>">
								</figure>

								<div class="paragraph v3 blue">
									<?php echo $strip['texto'] ?>
								</div>		
							</div>
						<?php endforeach ?>
						</div>
					</div>	
				</div>
			</div>
		</section>	


		<section class="about" id="about">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 offset-md-1">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="puntos"> </div>
									<div class="ml-4">
										<h1 class="title txt-stroke blue">
											ACERCA DE
										</h1>
										<h2 class="title blue">
											LAMINEX
										</h2>
									</div>
								</div>		
							</div>

							<div class="col-md-12 body">
								<div class="paragraph black">
								<?php echo $page['data'][0]['texto_acerca_de'] ?>
								</div>
							</div>		
						</div>						
					</div>
					<div class="col-md-4" >
						<figure>
							<img src="<?php echo $page['data'][0]['img_acerca_de']['data']['full_url'] ?>" alt="" class="img-fluid mw">
						</figure>
					</div>
				</div>
			</div>
		</section>


		<section class="blog" id="blog">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-11 offset-md-1">
						<div class="row">
							<div class="puntos"> </div>
							<div class="ml-4">
								<h1 class="title txt-stroke blue">
									CASOS DE ÉXITO
								</h1>							
							</div>
						</div>
					</div>
				</div>


				<!-- Cada vista previa del post mide 498.395px en una resolución de 1366.  -->
				<div class="row carousel-blog">
					<div class="slider" id="slider-posts" posts="<?php echo $casos['meta']['result_count']?>">
					<?php foreach ($casos['data'] as $key => $caso): ?>
						<div class="preview-post">
							<a href=" <?=RUTA?>post.php?id=<?php echo $caso['id'] ?> ">
								<figure>
									<img src="<?php echo $caso['imagen']['data']['full_url'] ?> " class="img-fluid mw" alt="">
								</figure>
								<div class="content">
									<h1 class="title txt-stroke orange">
										<?php echo $caso['titulo'] ?>
									</h1>
									<div class="paragraph white">
										<?php echo $caso['descripcion'] ?>									
									</div>
								</div>	
							</a>
						</div>
					<?php endforeach ?>	
					</div>
				</div>

				<div class="control row d-none d-md-block w-100 "> 
					<div class="col-md-10 mx-auto text-center">
						<div class="row ">
							<div class="next" id="offset-left">
								<img src="<?=RUTA?>sprites/left.svg" alt="">
							</div>
							<div class="next ml-auto" id="offset-right">
								<img src="<?=RUTA?>sprites/right.svg" alt="">
							</div>
						</div>			
						
						<a href="<?=RUTA?>blog.php" class="ancla orange mt-5 d-md-block w-100" > Ver más </a>			
					</div>
				</div>
				
				<a href="<?=RUTA?>blog.php" class="ancla orange mt-5 text-center d-block d-md-none w-100" > Ver más </a>
			</div>
		</section>



		<section class="contacto" id="contacto">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-5 offset-md-1">
						<div class="row">
							<div class="col-md-12">
								<div class="puntos"> </div>
								<div class="ml-4">
									<h1 class="title txt-stroke blue">
										CONTACTO
									</h1>
									
								</div>
								
							</div>	

							<div class="col-md-6">
								<form action="<?=RUTA?>helpers/Contact.helper.php" class="form-contact hide-on-submit" id="contact-form">
									<input type="text" id="nombre" name="name" value="" placeholder="Nombre">
									<input type="email" id="email" name="email" value="" placeholder="E-mail">
									<input type="text" id="asunto" name="subject" value="" placeholder="Asunto">
									<textarea type="textarea" rows="5" name="message" id="mensaje" value="" placeholder="Mensaje"></textarea>
									<div class="alert alert-danger text-danger circular-book paragraph " style="display: none"></div>
									<div class="g-recaptcha" data-sitekey="6LevwNsZAAAAABRH1lu2sbLz0FrcCSosSAp30lPJ" style="transform:scale(0.8);-webkit-transform:scale(0.9); margin-left:-5%;" data-aos-once="true" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-offset="200"></div>
									<button type="submit" value="Enviar" class="button">Enviar</button>
								</form>
								<div class="show-on-submit " style="display: none;">
									<div class="paragraph v2 book cian-midle" >
										Tu mensaje fue enviado, nos pondremos en contacto pronto.
									</div>
								</div>
							</div>
							
						</div>						
					</div>
					<div class="col-md-5 col-12">
						<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119210.04438724405!2d-89.70295877514155!3d20.98005123832179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56715cab450d17%3A0x5dfc155715abeb09!2zTcOpcmlkYSwgWXVjLg!5e0!3m2!1ses!2smx!4v1602875479640!5m2!1ses!2smx" width="535" height="273" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							<div class="datos col-md-7 col-12">
								<p class="paragraph v2 orange">T.<bold class="paragraph v2 black"> <?php echo $page['data'][0]['telefono'] ?></bold></p>
								<p class="paragraph v2 orange">D.<bold class="paragraph v2 black"> <?php echo $page['data'][0]['direccion'] ?></bold></p>
								<p class="paragraph v2 orange">M.<bold class="paragraph v2 black"> <?php echo $page['data'][0]['correo_electronico'] ?></bold></p>
							</div>	
					</div>
					
					
				</div>
			</div>
		</section>

		<?php require("views/footer.view.php"); ?>	
		
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<?php echo $jquery_js; ?>
		<?php echo $tether_js; ?>

		<?php echo $lottie_js; ?>
		<!-- Javascripts own files  -->		
		<?php echo $own_file_js; ?>


		<?php echo $bootstrap_v4_js; ?>

		<?php echo $font_awesome_js; ?>
		
	</body>
</html>