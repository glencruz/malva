<footer class="footer" id="">
	<div class="container-fluid">
		<div class="col-9 col-md-3 mx-auto ml-md-0 brand-container">
			<figure><img class="img-fluid" src="<?php echo RUTA ?>sprites/logo-footer.svg" ></figure>
		</div>

		<div class="row mx-auto footer-main">
			<div class="col-12 col-md-2 menu-list">
				<a  href="<?php if (isset( $isHome ) ){ echo '#home';} else{ echo RUTA.'#home';}?>">Inicio</a>
				<a href="<?php if (isset( $isHome ) ){ echo '#servicios';} else{ echo RUTA.'#servicios';}?>">Servicios</a>
				<a href="<?php if (isset( $isHome ) ){ echo '#about';} else{ echo RUTA.'#about';}?>">Acerca de</a>
				<a href="<?php if (isset( $isHome ) ){ echo '#blog';} else{ echo RUTA.'#blog';}?>">Casos de éxito</a>
				<a href="<?php if (isset( $isHome ) ){ echo '#contacto';} else{ echo RUTA.'#contacto';}?>"></a>
			</div>

			<div class="col-12 offset-md-1 col-md-2 menu-list">
                <p>T. <?php echo $page['data'][0]['telefono'] ?></p>
                <p>D. <?php echo $page['data'][0]['direccion'] ?></p>
                <p>M. <?php echo $page['data'][0]['correo_electronico'] ?></p>
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

		<div class="row mx-auto terms-container col-8">
			<div class="links">
                <span class="link">Copyright © 2020 Laminex. Todos los derechos reservados. </span>
				<span class="link">Aviso de privacidad</span>
				
			</div>
		</div>
	</div>
</footer>

