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
    <?php echo $iniciarsesion_js;  ?>
    <!-- Font awesome -->
    <?php echo $font_awesome_css; ?>
    <!-- CSS own files -->
    <?php echo $own_file_css; ?>

    <?php echo $google_analitycs; ?>
    <?php echo $jquery_js;  ?>


</head>

<body>

    <!-- <?php //require("views/navbar.view.php"); ?>   -->
    <div class="container-fluid">
        <div class="container">
            <h2 class="title morado text-center" style="margin:8% 0 1% 0; font-size: 5rem;" id="title">Registro/Inicio
                de Sesión</h2>

            <hr style="background: #aa0095; height: 3px; width: 50%;">
            <div class="row">
                <div class="col-md-5">
                    <form role="form" method="post" id="ingresarUsuario">
                        <fieldset>
                            <h2 class="title lila"> Nuevo cliente Malva</h2>

                            <div class="form-group">
                                <p class=" paragraph black text-uppercase pull-center"> Ingrese sus datos:</p>

                            </div>
                            <div class="form-group">
                                <input type="text" name="nombre" id="nombre" class="form-control input-lg"
                                    placeholder="Nombre">
                            </div>

                            <div class="form-group">
                                <input type="text" name="apellido" id="apellido" class="form-control input-lg"
                                    placeholder="Apellido">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg"
                                    placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg"
                                    placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password2" id="password2" class="form-control input-lg"
                                    placeholder="Confirmar contraseña">
                            </div>

                            <div class="form-group">
                                <input type="number" name="telefono" id="telefono" class="form-control input-lg"
                                    placeholder="Número telefónico">
                            </div>

                            <div class="form-group">
                                <input type="number" name="cp" id="cp" class="form-control input-lg"
                                    placeholder="Código Postal">

                            </div>

                            <div class="form-group">
                                <input type="text" name="ciudad" id="ciudad" class="form-control input-lg"
                                    placeholder="Ciudad">
                            </div>
                            <div class="form-group">
                                <input type="text" name="estado" id="estado" class="form-control input-lg"
                                    placeholder="Estado">
                            </div>
                            <div class="form-group">
                                <input type="text" name="colonia" id="colonia" class="form-control input-lg"
                                    placeholder="Colonia">
                            </div>
                            <div class="form-group">
                                <input type="text" name="calle" id="calle" class="form-control input-lg"
                                    placeholder="Dirección">
                            </div>

                            <div class="form-group">
                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="text" name="next" id="next" class="form-control input-lg"
                                            placeholder="Número Exterior">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="nint" id="nint" class="form-control input-lg"
                                            placeholder="Número Interior">
                                    </div>
                                </div>

                            </div>

                            <div class="form-check">
                                <label class="paragraph black form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    Aceptar política y términos
                                </label>
                            </div>
                            <div style="margin-top:3%; margin-bottom:10%;">
                                <input type="submit" style="text-align:center; margin-left:20%;" class="button"
                                    onclick="Registrar();" value="Registrar">
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
                            <h2 class="title lila"> ¿Ya eres cliente Malva?</h2>
                            <div class="form-group">
                                <p class="paragraph black text-uppercase pull-center">INICIE SESIÓN CON SUS DATOS:</p>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="emaili" class="form-control input-lg"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="passwordi" class="form-control input-lg"
                                    placeholder="Contraseña">
                            </div>
                            <div>
                                <input type="submit" class="button" style="text-align:center; margin-left:20%;"
                                    value="Iniciar Sesión" onclick="iniciosesion();">
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

    <?php echo $popper_js; ?>
    <?php echo $bootstrap_v4_js; ?>

    <?php echo $font_awesome_js; ?>

</body>

</html>