<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Vestido - Malva Studio</title>

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
	</head>
	<body>

        <?php require("views/navbar.view.php"); ?>
        
		<?php foreach ($vestidos as $vestido): ?>
        <section class="caso">
        <div class="container-fluid">
				<div class="row">
					<div class="col-md-4 offset-md-1">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="ml-4">
										<h1 class="title morado v2">
										<?php echo $vestido['codigo'] ?>
										</h1>
										
										<div class="paragraph black">
										<?php echo $vestido['descripcion'] ?>
										<br>
										$ <?php echo $vestido['precio'] ?> MXN		
										</div>
										<div class="">
											<a href="#" class="button">Agregar a carrito</a>
										</div>
									</div>
								</div>		
                            </div>
                          
						</div>						
					</div>
					<div class="col-md-6">
						<figure>
							<img src="<?php echo RUTA ?>bd/<?php echo $vestido['imagen'] ?> " alt="" class="img-fluid mw">
						</figure>
                    </div>
                    
                </div>
               
        </section>


        <section class="blog">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-11 offset-md-1">
						<div class="row">
							<div class="puntos"> </div>
							<div class="ml-4">
								<h1 class="title morado">
									También 
                                </h1>	
                                <h2 class="title morado">
                                    te puede interesar
                                </h2>						
							</div>
						</div>
					</div>
				</div>

				
				<div class="row carousel-blog">
					<div class="slider" id="slider-posts" posts="<?php echo count($vestidos2) ?>">
					<?php foreach ($vestidos2 as $ves): ?>

						<div class="preview-post">
							<a href=" <?=RUTA?>accesorio.php?id=<?php echo $ves['id_accesorio'] ?> ">
								<figure>
									<img src="<?php echo RUTA ?>bd/<?php echo $ves['imagen'] ?> " class="img-fluid mw" style="max-width:50%;"  alt="">
								</figure>
								<div class="content">
								<h1 class="title morado">
									<?php echo $ves['codigo'] ?>

									</h1>
									<div class="paragraph black">
									<?php echo $ves['descripcion'] ?>
									<br>
									$ <?php echo $ves['precio'] ?> MXN								
								</div>
								</div>	
							</a>
						</div>
					<?php endforeach ?>	
					</div>
                </div>
				
                <div class="control row d-none d-md-block w-100"> 
					<div class="col-md-10 mx-auto text-center">
						<div class="row ">
							<div class="next" id="offset-left">
								<img src="<?=RUTA?>sprites/left.svg" alt="">
							</div>
							<div class="next ml-auto" id="offset-right">
								<img src="<?=RUTA?>sprites/right.svg" alt="">
							</div>
						</div>			
								
					</div>
				</div>
			
            </div>
        </section>
        <?php endforeach ?>
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