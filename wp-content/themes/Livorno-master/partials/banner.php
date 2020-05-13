<!-- banner -->
<section class="banner p-0">

  <div class="main-banner__content">
    <?php $args = array( 'post_type' => 'banner');?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-banner__items">
        <div class="main-banner">
          <div class="main-banner__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          </div>
          <div class="main-banner__text">
            <?php the_content(); ?>

          </div>
        </div>
      </div>
    <?php endwhile; ?>
    


  </div>
  <div class="dropdown_aroow">
    <a href="#acerca">	<img src="<?php echo get_template_directory_uri();?>/assets/img/dropdown.png" alt=""></a>
  </div>
</section>