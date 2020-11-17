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
			<a href="login.php">Iniciar Sesión</a>

			<div class="social-icons">
			
					<a target="_blank" href="https://www.facebook.com/malvastudi0"><img src="<?php echo RUTA ?>sprites/facebook.svg" alt=""></a>
				
				
					<a  target="_blank" href="https://www.instagram.com/malvastudio_/"><img src="<?php echo RUTA ?>sprites/instagram.svg" alt=""></a>
				
			</div>
		
	</div>
</div>