	<!-- planos -->
	<section id="planos" class="container-planos-livorno pt-0">
		<div class="main-planos__content">
			<?php $args = array( 'post_type' => 'PlanosDelProyecto');?>   
			<?php $loop = new WP_Query( $args ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="item-planos">
					<div class="main-plan row">
						<div class="col-md-6 centeres">
							<div class="title-general title-general-planos content-zone__text">
								<h3> Planos del <span>PROYECTO</span></h3>
								<p>El apartamento típico estará conformado por los siguientes espacios:</p>
							</div>


							<div class="main-planos__items">
								<img onclick="openModal();currentSlide(1)"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							</div>

						</div>
						<div class="col-md-6 centeres">
							<div class="d-flex" style="justify-content: start;width: 100%;">

								<div class="arro">
									<span><?php the_field('medida_1'); ?></span>
									<span><?php the_field('medida_2'); ?></span>
								</div>
							</div>

							<div class="main-plan__text">

								<ul class="detail-planos">
									<li><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_9.png" alt=""><?php the_field('salon_comedor'); ?> </li>
									<li><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_3.png" alt=""><?php the_field('amplio_balcon'); ?> </li>
									<li><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_4.png" alt=""> <?php the_field('cocina'); ?> </li>
									<li><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_5.png" alt=""> <?php the_field('zona_de_ropa'); ?> </li>
									<li><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_7.png" alt=""> <?php the_field('alcoba_principal_con_bano'); ?> </li>
									<li><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_8.png" alt=""> <?php the_field('alcoba_auxiliar'); ?> </li>
									<li><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_6.png" alt=""><?php the_field('bano_social'); ?>  </li>


								</ul>
								<span class="number number-2 ">03</span>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; ?>


		</div>
	</section>




	<div id="myModal" class="modal">


		<div class="modal-content">
			<button aria-label='Close' class='close' data-dismiss='modal' type='button' onclick="closeModal()">
				<span aria-hidden='true' class='fa fa-close'></span>
			</button>

			<div class="mySlides">
				<!-- <div class="numbertext">1 / 4</div> -->
				<img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/1.png" style="width:100%">
			</div>

			<div class="mySlides">
				<!-- <div class="numbertext">2 / 4</div> -->
				<img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/2.png" style="width:100%">
			</div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
	</div>
</div>