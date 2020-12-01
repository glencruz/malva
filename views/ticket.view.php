<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Malva Studio - Ticket</title>

		<meta property="og:url"                content="..." />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="..." />
		<meta property="og:description"        content="..." />
		<meta property="og:image"              content="..." />
		<?php echo $favicon; ?>

		<?php echo $normalize_css; ?>
		<?php echo $boostrap_v4_css ?>
		<?php echo $iniciarsesion_js;  ?>
		<!-- Font awesome -->
		<?php echo $font_awesome_css; ?>
		<!-- CSS own files -->
		<?php echo $own_file_css; ?>
		
		<?php echo $google_analitycs; ?>
	</head>
	<body>

        <?php require("views/navbar.view.php"); ?>
        <section class="ticket">
        
            <h1 class="title  morado">
				Resumen de tu compra
			</h1>

			<?php
							$total=0;
							if(isset($_SESSION["carrito"])){
								foreach ($_SESSION["carrito"] as $indice => $arreglo) {
									$total+=$arreglo["precio"]*1;

									foreach ($arreglo as $key => $value) {
										if($key=="imagen"){
										}else{
											
											?>

									<div class="paragraph black">
									<?php echo $key.": ".$value?>		
									</div>



										<?php	

										}


									}
								}
								
							}

									
							

						?>
            <div class="media">
                <div class="media-body">
                    
                    
                </div>
            </div>
            <h1 class="title  morado">
				Información de pago:
			</h1>
            <div class="paragraph black">
            <br>
            Empresa: Malva Studio
            <br>
            Cuenta: 12113 784 875 7545
            <br>
            Banco: Banamex
            <br>
            <br>
           

            	<?php
							$total=0;
							if(isset($_SESSION["carrito"])){
								foreach ($_SESSION["carrito"] as $indice => $arreglo) {
									$total+=$arreglo["precio"]*1;

									foreach ($arreglo as $key => $value) {
										


									}
								}
								echo "Total:  $".$total;
							}

									
							

						?>


            <br>
            </div>
          
        </section>
	
       

        <?php require("views/footer.view.php"); ?>	
		
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<?php echo $jquery_js; ?>
		<?php echo $tether_js; ?>

		<?php echo $lottie_js; ?>
		<!-- Javascripts own files  -->		
		<?php echo $own_file_js; ?>

		<?php echo $popper_js; ?>
		<?php echo $bootstrap_v4_js; ?>
		

		<?php echo $font_awesome_js; ?>
		
		
	</body>
</html>