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
	</head>
	<body>

        <?php require("views/navbar.view.php"); ?>
        

        <section class="casos">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-11 offset-md-1">
						<div class="row">
							<div class="puntos"> 
							</div>
							<div class="ml-4">
								<h1 class="title morado pt">
									Vestidos
								</h1>							
							</div>
						</div>
					</div>
				</div>
				

			<div class="row carousel-blog">
					<div class="slider" id="slider-posts" posts="1">
					
						<div class="preview-post">
							<a href=" <?=RUTA?>post.php ">
								<figure>
									<img src="https://placehold.it/534x325" class="img-fluid mw" alt="">
								</figure>
								<div class="content">
									<h1 class="title morado">
										Titulo
									</h1>
									<div class="paragraph white">
									Descripción								</div>
								</div>	
							</a>
						</div>
					
					</div>
				</div>

				<div class="control row  "> 
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