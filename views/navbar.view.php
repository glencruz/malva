<header class="header">
	<div class="pos-f-t">
		
		<nav class="nav">
			<div class="container-fluid">
				<div class="row justify-content-between">
					<div class="logo offset-md-1 pl-4">
						<a href="<?php echo RUTA ?>" class="mb-0">
							<img src="<?=RUTA?>sprites/logo_blue.svg" alt="" class="regular-logo">
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
			<a href="<?php if (isset( $isHome ) ){ echo '#servicios';} else{ echo RUTA.'#servicios';}?>">Servicios</a>
			<a href="<?php if (isset( $isHome ) ){ echo '#about';} else{ echo RUTA.'#about';}?>">Acerca de</a>
			<a href="<?php if (isset( $isHome ) ){ echo '#blog';} else{ echo RUTA.'#blog';}?>">Casos de éxito</a>
			<a href="<?php if (isset( $isHome ) ){ echo '#contacto';} else{ echo RUTA.'#contacto';}?>">Contacto</a>
			<div class="social-icons">
			<?php if (isset($page['data'][0]['facebook'])): ?>
					<a target="_blank" href=" <?php echo $page['data'][0]['facebook'] ?> "><img src="<?php echo RUTA ?>sprites/facebook.svg" alt=""></a>
				<?php endif ?>
				<?php if (isset($page['data'][0]['instagram'])): ?>
					<a  target="_blank" href=" <?php echo $page['data'][0]['instagram'] ?> "><img src="<?php echo RUTA ?>sprites/instagram.svg" alt=""></a>
				<?php endif ?>
			</div>
		
	</div>
</div>