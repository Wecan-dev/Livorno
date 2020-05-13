<!-- Acerca de.... -->
<?php if(have_posts()): the_post(); ?>
	<section id="acerca" class="acerca-proyectos">
		<div class="main-about">
			<div class="main-about__item">
				<img src="<?php the_field('imagen_acerca_de'); ?>" alt="">
			</div>
			<div class="main-about__item">
				<div class="title-general">
					<h3>Acerca del <span>proyecto</span></h3>
				</div>

				<div class="h-5">
					<?php the_field('test'); ?>
					
				</div>
				<!--zonas -->
				<div class="main-zone">


					<div class="main-zone__item">

						<span class="number">01</span>
					</div>

					<a href="#galeria-apto" class="btn-general">ver galeria</a>
				</div>
			</div>

		</div>


	</section>
	<?php endif; ?>