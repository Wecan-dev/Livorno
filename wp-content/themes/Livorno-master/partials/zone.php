	<!-- Zonas comunes -->

	<section id="zonas-comunes">
		<div class="content-zone">

			<div class="content-zone__item">
				<div class="title-general title-general__white">
					<h3>Zonas <span>comunes</span></h3>
					<span class="number number-zone">02</span>
				</div>
			</div>
			<div class="content-zone__item">
				<div class="content-zone__text">
					<p><?php the_field('subtitulo'); ?></p>

					<div class="items">
						<ul>
							<li><img src="<?php echo get_template_directory_uri();?>/assets/img/icono-zona/icon_11.png" alt=""><?php the_field('salon_social'); ?> </li>
							<li><img src="<?php echo get_template_directory_uri();?>/assets/img/icono-zona/gym.png" alt=""><?php the_field('gimnasio'); ?></li>
							<li><img src="<?php echo get_template_directory_uri();?>/assets/img/icono-zona/icon_13.png" alt=""><?php the_field('piscina'); ?> </li>
							<li><img src="<?php echo get_template_directory_uri();?>/assets/img/icono-zona/icon_16.png" alt=""><?php the_field('zonas_verdes'); ?></li>
						</ul>
						<ul>
							
							<li><img src="<?php echo get_template_directory_uri();?>/assets/img/icono-zona/icon_14.png" alt=""><?php the_field('juegos_infantiles'); ?></li>
							<li><img src="<?php echo get_template_directory_uri();?>/assets/img/icono-zona/icon_15.png" alt=""><?php the_field('cancha_recreativa'); ?></li>



						</ul>
					</div>


				</div>
			</div>

			<div id="galeria-exterior"></div>
		</div>

	</section>