<footer class="footer" id="">
	<div class="container-fluid">
		<div class="col-9 col-md-3 mx-auto ml-md-0 brand-container">
		<h1 class="title white v2 ">Malva Studio</h1>		
	</div>

		<div class="row mx-auto footer-main">
			<div class="col-12 col-md-2 menu-list">
				<a href="<?php if (isset( $isHome ) ){ echo '#home';} else{ echo RUTA.'#home';}?>" class="margen">Inicio</a>
				<a href="<?php if (isset( $isHome ) ){ echo '#vestidos';} else{ echo RUTA.'#vestidos';}?>">Vestidos</a>
	 			<a href="<?php if (isset( $isHome ) ){ echo '#accesorios';} else{ echo RUTA.'#accesorios';}?>">Accesorios</a>
				<a href="<?php if (isset( $isHome ) ){ echo '#about';} else{ echo RUTA.'#about';}?>">Acerca de</a>
				<a href="<?php if (isset( $isHome ) ){ echo '#contacto';} else{ echo RUTA.'#contacto';}?>">Contacto</a>
			</div>

			<div class="col-12 offset-md-1 col-md-3 menu-list">
                <p>T. 999 354 7567</p>
                <p>D. Calle 31 No 198 A x 88 y 90, 97320, Centro 97320 Progreso, México</p>
                <p>M. malvastudio@gmail.com</p>
				<div class="social-icons">

					<a target="_blank" href="https://www.facebook.com/malvastudi0"><img src="<?php echo RUTA ?>sprites/facebook.svg" alt=""></a>
					<a  target="_blank" href="https://www.instagram.com/malvastudio_/"><img src="<?php echo RUTA ?>sprites/instagram.svg" alt=""></a>
				</div>
			</div>

			
		</div>

		<div class="row mx-auto terms-container col-8">
			<div class="links">
                <span class="link">Copyright © 2020 Malva Studio. Todos los derechos reservados. </span>
				
				
			</div>
		</div>
	</div>
</footer>

