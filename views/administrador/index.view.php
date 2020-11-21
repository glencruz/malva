<!DOCTYPE html>
<html lang="es">
	<head>
	<title>Malva Studio-Administrador</title>
		<?php echo $favicon; ?>
		<?php echo $normalize_css; ?>
		<?php echo $boostrap_v4_css ?>

		<!-- Font awesome -->
		<?php echo $font_awesome_css; ?>
		<!-- CSS own files -->
		<?php echo $own_file_css; ?>
	</head>
	<body>

        <?php require("views/administrador/menu.view.php"); ?>
        

       

       	
		
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<?php echo $jquery_js; ?>
		<?php echo $tether_js; ?>


		<!-- Javascripts own files  -->		
		<?php echo $own_file_js; ?>
		<?php echo $popper_js; ?>

		<?php echo $bootstrap_v4_js; ?>

		<?php echo $font_awesome_js; ?>
		
	</body>
</html>