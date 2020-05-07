	<!-- galleria -->
	<section  class="container-galery-livorno" >
		<div class="main-galery">
			<div class="title-general padding-galery">
				<h3>Galería <span>exterior</span></h3>
			</div>

			<div class="">
				<div class="main-galery__grid">
					<div class="grid-slider">


						<div class="grid-slide">
							<div class="grid-row">
								<div>
									<img onclick="openModal2();currentSlide2(1)" src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_11.png" alt="" />
								</div>
								<div>
									<img onclick="openModal2();currentSlide2(2)" src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_12.png" alt="" />
								</div>
								<div>
									<img onclick="openModal2();currentSlide2(3)" src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_13.png" alt="" />
								</div>
								<div>
									<img onclick="openModal2();currentSlide2(4)" src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_14.png" alt="" />
								</div>
							</div>

						</div>
						<div class="grid-slide">
							<div class="grid-row">
								<img onclick="openModal2();currentSlide2(5)" src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_14.png" alt="" />
								<img onclick="openModal2();currentSlide2(6)" src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_13.png" alt="" />
								<img onclick="openModal2();currentSlide2(7)" src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_13.png" alt="" />

								<img onclick="openModal2();currentSlide2(8)" src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_11.png" alt="" />

							</div>

						</div>

						<div class="barra-progress">
							<div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
								<span class="slider__label sr-only">

							</div>
							<span class="line"></span>
						</div>
					</div>
					</sectio>
				</div>


			</div>
	</section>



		<!--Modal galeria-->
<div id="myModal2" class="modal">


	<div class="modal-content">
		<button aria-label='Close' class='close' data-dismiss='modal' type='button' onclick="closeModal2()">
			<span aria-hidden='true' class='fa fa-close'></span>
		</button>
	
		<div class="mySlides2">
			<!-- <div class="numbertext">1 / 4</div> -->
			<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_11.png" style="width:100%">
		</div>
	
		<div class="mySlides2">
			<!-- <div class="numbertext">2 / 4</div> -->
			<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_12.png" style="width:100%">
		</div>
	
		<div class="mySlides2">
			<!-- <div class="numbertext">3 / 4</div> -->
			<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_13.png" style="width:100%">
		</div>
	
		<div class="mySlides2">
			<!-- <div class="numbertext">1 / 4</div> -->
			<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_14.png" style="width:100%">
		</div>
	
		<div class="mySlides2">
			<!-- <div class="numbertext">2 / 4</div> -->
			<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_14.png" style="width:100%">
		</div>
	
		<div class="mySlides2">
			<!-- <div class="numbertext">3 / 4</div> -->
			<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_13.png" style="width:100%">
		</div>
		<div class="mySlides2">
			<!-- <div class="numbertext">1 / 4</div> -->
			<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_12.png" style="width:100%">
		</div>
	
		<div class="mySlides2">
			<!-- <div class="numbertext">2 / 4</div> -->
			<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/image_11.png" style="width:100%">
		</div>
	
	
	
		<a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides2(1)">&#10095;</a>
	
	
	
	</div>
	</div>