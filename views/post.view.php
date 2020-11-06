<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Articulo - Malva Studio</title>

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
        

        <section class="caso">
        <div class="container-fluid">
				<div class="row">
					<div class="col-md-4 offset-md-1">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="ml-4">
										<h1 class="title morado v2">
											titulo
										</h1>
										<h2 class="title v2 morado">
											subtitulo
										</h2>
										<div class="paragraph black">
											descripcion
										</div>
									</div>
								</div>		
                            </div>
                          
						</div>						
					</div>
					<div class="col-md-6">
						<figure>
							<img src="https://placehold.it/534x325" alt="" class="img-fluid mw">
						</figure>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1 ">
                        <div class="paragraph black">
							Otro parrafo
                        </div>
                    </div>
                </div>
                <div class="row">
                    <figure class="col-md-5 offset-md-1">
                        <img src="https://placehold.it/534x325" alt="" class="img-fluid mw">
                    </figure>
                    <figure class="col-md-5">
                        <img src="https://placehold.it/534x325" alt="" class="img-fluid mw">
                    </figure>
            
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="paragraph black">
							parrafo de nuevo
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 offset-md-1">
                        <h2 class="title black">
							COMPARTIR
                        </h2>
                        <div class="social-icons">
                        <a href="https://www.facebook.com/sharer.php?u=<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31"><defs><style>.a{fill:#d78ece;}</style></defs><path class="a" d="M33.789,4.5H6.211A1.712,1.712,0,0,0,4.5,6.211V33.789A1.712,1.712,0,0,0,6.211,35.5H20V23.229H16.295V18.708H20V15.366c0-4,2.777-6.184,6.353-6.184,1.711,0,3.552.129,3.98.186V13.55h-2.85c-1.946,0-2.317.92-2.317,2.277v2.882H29.8L29.2,23.229H25.167V35.5h8.622A1.712,1.712,0,0,0,35.5,33.789V6.211A1.712,1.712,0,0,0,33.789,4.5Z" transform="translate(-4.5 -4.5)"/></svg></a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]?> " target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40.398" height="32.874" viewBox="0 0 40.398 32.874"><defs><style>.a{fill:#d78ece;}</style></defs><path class="a" d="M41.812,8.4a16.756,16.756,0,0,1-4.76,1.31A8.317,8.317,0,0,0,40.7,5.116a16.469,16.469,0,0,1-5.265,2.012A8.286,8.286,0,0,0,21.094,12.8a8.114,8.114,0,0,0,.214,1.892A23.488,23.488,0,0,1,4.221,6.015,8.3,8.3,0,0,0,6.8,17.093a8.1,8.1,0,0,1-3.767-1.036v.1a8.3,8.3,0,0,0,6.652,8.133,8.343,8.343,0,0,1-2.183.291,7.819,7.819,0,0,1-1.558-.154,8.3,8.3,0,0,0,7.747,5.761,16.617,16.617,0,0,1-10.3,3.553,16.8,16.8,0,0,1-1.978-.12A23.167,23.167,0,0,0,14.1,37.373c15.264,0,23.6-12.644,23.6-23.611,0-.36-.009-.719-.026-1.07A16.872,16.872,0,0,0,41.812,8.4Z" transform="translate(-1.413 -4.5)"/></svg></a>
                        </div>
                    </div>
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

				
				<!-- Cada vista previa del post mide 498.395px en una resolución de 1366.  -->
				<div class="row carousel-blog">
					<div class="slider" id="slider-posts" posts="1">
					
						<div class="preview-post">
							<a href=" <?=RUTA?>post.php">
								<figure>
									<img src="https://placehold.it/534x325 " class="img-fluid mw" alt="">
								</figure>
								<div class="content">
									<h1 class="title morado">
										titulo
									</h1>
									<div class="paragraph white">
									descripción									</div>
								</div>	
							</a>
						</div>
					
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