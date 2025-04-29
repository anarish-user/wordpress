<?php
/*
Template Name: gallery page
*/
get_header(); ?>

<div id="page-banner-area" class="page-banner-area" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero_area/banner_bg.jpg');'">
   <div class="page-banner-title">
      <div class="text-center">
         <h2>Event Gallery</h2>
         <ol class="breadcrumb">
            <li><a href="#">Exibit /</a></li>
            <li>Gallery</li>
         </ol>
      </div>
   </div>
</div>

<section id="main-container" class="main-container ts-gallery">
   <div class="container">

      <?php
      // ✅ Required for Elementor compatibility
      if ( have_posts() ) :
         while ( have_posts() ) : the_post();
            the_content();
         endwhile;
      endif;
      ?>

      <div class="row">
         <div class="col-lg-8 mx-auto">
            <h2 class="section-title text-center">
               <span>Previus Moments</span>
               Event Gallery
            </h2>
         </div>
      </div>


                 <div class="grid ts-grid-item" style="position: relative; height: 889px;">
					<div class="grid-item" style="width: 380px; position: absolute; left: 0px; top: 0px;">
					  <a href="#" class="ts-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery1.jpg" alt=""></a>
					</div>
					<div class="grid-item" style="width: 380px; position: absolute; left: 380px; top: 0px;">
                  <a href="images/gallery/gallery2.jpg" class="ts-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery2.jpg" alt=""></a>
					</div>
					<div class="grid-item" style="width: 380px; position: absolute; left: 760px; top: 0px;">
                  <a href="images/gallery/gallery3.jpg" class="ts-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery3.jpg" alt=""></a>
					</div>
					<div class="grid-item" style="width: 380px; position: absolute; left: 380px; top: 213px;">
                  <a href="images/gallery/gallery4.jpg" class="ts-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery4.jpg" alt=""></a>
					</div>
					<div class="grid-item" style="width: 380px; position: absolute; left: 760px; top: 283px;">
                  <a href="images/gallery/gallery5.jpg" class="ts-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery5.jpg" alt=""></a>
					</div>
					<div class="grid-item" style="width: 380px; position: absolute; left: 0px; top: 313px;">
                  <a href="images/gallery/gallery6.jpg" class="ts-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery6.jpg" alt=""></a>
					</div>
					<div class="grid-item" style="width: 380px; position: absolute; left: 380px; top: 496px;">
                  <a href="images/gallery/gallery7.jpg" class="ts-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery7.jpg" alt=""></a>
					</div>
					<div class="grid-item" style="width: 380px; position: absolute; left: 760px; top: 576px;">
                  <a href="images/gallery/gallery8.jpg" class="ts-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery8.jpg" alt=""></a>
					</div>
					<div class="grid-item" style="width: 380px; position: absolute; left: 0px; top: 616px;">
                  <a href="images/gallery/gallery9.jpg" class="ts-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery9.jpg" alt=""></a>
					</div>
				 </div>
			</div><!-- Conatiner end -->
		</section>



<?php
get_footer(); ?>