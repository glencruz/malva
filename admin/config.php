<?php 
	
	require('vendor/autoload.php');

	define('RUTA','http://localhost:8080/malva/');


	

	$favicon = "<link rel='icon' type='image/png' href='http://localhost/malva/favicon-malva.png' />";

	#CSS

	$normalize_css = '<link rel="stylesheet" href="'.RUTA.'css/normalize.min.css">';

	$boostrap_v4_css = '<link rel="stylesheet" href="'.RUTA.'css/bootstrap.min.css">';

	$font_awesome_css = '<link rel="stylesheet" href="'.RUTA.'css/all.css">';

	$datatables_css = '<link rel="stylesheet" href="'.RUTA.'datatables/datatables.min.css">';

	$datatables_boostrap_v4_css = '<link rel="stylesheet" href="'.RUTA.'datatables/DataTables-1.10.22/css/dataTables.bootstrap4.min.css">';


	#JS
	
	$jquery_js = '<script src="'.RUTA.'js/jquery-3.2.1.min.js"></script>';

	$tether_js = '<script src="'.RUTA.'js/tether.min.js"></script>';

	$bootstrap_v4_js = '<script src="'.RUTA.'js/bootstrap.min.js"></script>';

	$popper_js = '<script src="'.RUTA.'js/popper.min.js"></script>';

	$font_awesome_js = '<script src="'.RUTA.'js/all.js"></script>';

		$lottie_js = "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.8/lottie.min.js\" integrity=\"sha256-QWuFU4W0oiKnJa3GVz5Z+pNf91eTYdmHogcIeJpWON0=\" crossorigin=\"anonymous\"></script>";
	
	$datatables_js = '<script src="'.RUTA.'datatables/datatables.min.js"></script>';
	$iniciarsesion_js='<script src="'.RUTA.'js/registrousuario.js"></script>';

	#Own 
	#	js
	$iniciarsesion_js='<script src="'.RUTA.'js/registrousuario.js"></script>';
		$own_file_js = '<script src="'.RUTA.'js/malva.js"></script>';
	#	css
		$own_file_css = '<link rel="stylesheet" href="'.RUTA.'css/malva.min.css">';
	

	#Extra
	#
	$google_analitycs = "";

	$google_recaptcha = "";


?>