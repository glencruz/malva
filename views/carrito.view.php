<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vestidos - Malva Studio</title>

    <meta property="og:url" content="..." />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="..." />
    <meta property="og:description" content="..." />
    <meta property="og:image" content="..." />
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

    <section class="carrito">
        <form action="vestidos.php" metod="POST">
            <div class="container-fluid">
                <div class="row" style="margin-bottom:3%; margin-top:8%;">
                    <div class="offset-md-2">
                        <div class="puntos"> </div>
                        <div class="ml-4">
                            <h1 class="title  morado">Sus productos son:</h1>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="paragraph black offset-md-2 col-md-10" style="display: inline-block;">
                        <?php
							$total=0;
							if(isset($_SESSION["carrito"])){
							foreach ($_SESSION["carrito"] as $indice => $arreglo) {
							$total+=$arreglo["precio"]*1;
							foreach ($arreglo as $key => $value) {
							if($key=="imagen"){
						?>



                        <div class="col-md-6">
                            <figure>
                                <img style="max-height:80px;" src="<?php echo RUTA ?>bd/<?php echo $value ?> " alt=""
                                    class="">
                            </figure>
                        </div>
                        <?php
								
						}else{ if($key=="precio"){

						?>


                        <?php echo $ $key.": ".$value?> MXN

                        <br>




                        <?php	
													}else{?>

                        <?php echo $key.": ".$value?>
                        <br>

                        <?php
													}
												}
													# code...
												}
												# code...
												?>

                        <div class="col-md-2">

                            <a href="carrito.php?item=<?php echo $indice ?>" class="button"
                                style="padding: 1rem 5rem; text-align:center;">ELIMINAR</a>

                        </div>
                        <br><br>

                        <?php
												}

														?>


                        <?php

							}else{
															echo "<script> alert('El carrito se encuentra vacio')</script>"
														?>
                        <a href="vestidos.php">Regresar <a>

                                <?php
														}

													?>


                    </div>

                </div>
                <div class="row">
                    <div class="offset-md-5" style="">
                        <h1 class="ancla morado">Total a pagar: $ <?php echo $total; ?> MXN</h1>

                    </div>

                </div>
                <div class="row">
                    <div class="offset-md-4 col-md-4" style="margin-top:3%; margin-bottom:10%;">
                        <a href=" carrito.php?vaciar=true&val=1" class="button" style="text-align: center;">PAGAR
                            CARRITO</a>

                    </div>
                </div>
            </div>
        </form>
    </section>





    <?php require("views/footer.view.php"); ?>

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