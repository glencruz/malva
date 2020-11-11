<header class="header">
	<div class="pos-f-t">
		
		<nav class="nav">
			<div class="container-fluid">
			
				<div class="row justify-content-between">
					<div class="logo offset-md-1 pl-4">
						<a href="<?php echo RUTA ?>" class="mb-0">
							<!--<img  src="<?=RUTA?>sprites/logo_malva.svg" alt="" class="regular-logo">-->
							<h1 class="title morado v2 ">Malva Studio</h1>	
						</a>
						
					</div>
					
					<div class="user-icon d-none d-md-block " >
						<a href="<?php echo RUTA ?>" class="mb-0">
							<img  src="<?=RUTA?>sprites/carrito.svg" alt="" class="regular-logo" >
								
						</a>


						<div class="dropdown" style="display: inline;">
							<a class="btn " style="background-color: transparent; border-color: transparent;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img  src="<?=RUTA?>sprites/user.svg" alt="" class="regular-logo" >
							<img  src="<?=RUTA?>sprites/down.svg" alt="" class="regular-logo" style="max-height: 20px; margin: 10% 0 0 -80%;">
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Iniciar Sesión/ Registrarse</a>
								<a class="dropdown-item" href="#">Pedidos</a>
								<a class="dropdown-item" href="#">Cerrar Sesión</a>
							</div>
						</div>

					</div>
					 <!-- data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" -->

					<div class="toggle navbar-toggler" >
						<div class="bars" id="bar">
						</div>
					</div>
				</div>
			</div>	
		</nav>
		
	</div>
</header>
<div class="collapse d-block" id="navbarToggleExternalContent">
	<div class="row justify-content-end links title v2 white text-right flex-column">
		
			<a href="<?php if (isset( $isHome ) ){ echo '#home';} else{ echo RUTA.'#home';}?>" class="margen">Inicio</a>
			<a href="<?php if (isset( $isHome ) ){ echo '#vestidos';} else{ echo RUTA.'#vestidos';}?>">Vestidos</a>
 			<a href="<?php if (isset( $isHome ) ){ echo '#accesorios';} else{ echo RUTA.'#accesorios';}?>">Accesorios</a>
			<a href="<?php if (isset( $isHome ) ){ echo '#about';} else{ echo RUTA.'#about';}?>">Acerca de</a>
			<a href="<?php if (isset( $isHome ) ){ echo '#contacto';} else{ echo RUTA.'#contacto';}?>">Contacto</a>
			<div class="social-icons">
			
					<a target="_blank" href="https://www.facebook.com/malvastudi0"><img src="<?php echo RUTA ?>sprites/facebook.svg" alt=""></a>
				
				
					<a  target="_blank" href="https://www.instagram.com/malvastudio_/"><img src="<?php echo RUTA ?>sprites/instagram.svg" alt=""></a>
				
			</div>
			<div class="social-icons d-block d-md-none w-100">

				<a target="_blank" href="#"><img style="max-height:40px;" src="<?php echo RUTA ?>sprites/carrito.svg" alt=""></a>
				<a  target="_blank" href="#"><img style="max-height:40px;" src="<?php echo RUTA ?>sprites/user.svg" alt=""></a>
		</div>
		
	</div>
</div>