<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage chro
 * @since chro 1.0
 * @version 1.2
 */

?>


<section class="ts-contact-form">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title text-center">
                     <span>Have Questions?</span>
                     Send Message
                  </h2>
               </div><!-- col end-->
            </div>
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <?php echo do_shortcode('[contact-form-7 id="8f855b1" title="Contact form 1"]'); ?>

                  

               
               
               <!-- Contact form end -->
               </div>
            </div>
         </div>
         <div class="speaker-shap">
            <img class="shap1" src="<?php echo get_template_directory_uri(); ?>/assets/images/shap/home_schedule_memphis2.png" alt="">
         </div>
		</section>
<div class="footer-area">

<!-- ts-book-seat start-->
<section class="ts-book-seat" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/book_seat_img.jpg');'"
>
   <div class="container">
	  <div class="row">
		 <div class="col-lg-8 mx-auto">
			<div class="book-seat-content text-center mb-70">
			   <h2 class="section-title white">
				  <span>Hurry up!</span>
				  Book your Seat
			   </h2>
			   <a href="#" class="btn">Buy Ticket</a>
			</div><!-- book seat end-->
		 </div><!-- col end-->

	  </div><!-- row end-->
	  <div class="ts-footer-newsletter">
		 <div class="ts-newsletter" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/subscribe_pattern.png');'">
			<div class="row">
			   <div class="col-lg-6 mx-auto">
				  <div class="ts-newsletter-content">
					 <h2 class="section-title">
						<span>sUBSCRIBE TO nEWSLETTER</span>
						Want something extra?
					 </h2>
				  </div>
				  <div class="newsletter-form">
					 <form action="#" method="post" class="media align-items-end">
						<div class="email-form-group media-body">
						   <input type="email" name="email" id="newsletter-form-email" class="form-control"
							  placeholder="Your Email" autocomplete="off" required="">
						</div>
						<div class="d-flex ts-submit-btn">
						   <button class="btn">Subscribe</button>
						</div>
					 </form>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
   </div><!-- container end-->
</section>
<!-- book seat  end-->

<!-- footer start-->
<footer class="ts-footer">
   <div class="container">
	  <div class="row">
		 <div class="col-lg-8 mx-auto">
			<div class="ts-footer-social text-center mb-30">
			   <ul>
				  <li>
					 <a href="#"><i class="fa fa-facebook"></i></a>
				  </li>
				  <li>
					 <a href="#"><i class="fa fa-twitter"></i></a>
				  </li>
				  <li>
					 <a href="#"><i class="fa fa-google-plus"></i></a>
				  </li>
				  <li>
					 <a href="#"><i class="fa fa-linkedin"></i></a>
				  </li>
				  <li>
					 <a href="#"><i class="fa fa-instagram"></i></a>
				  </li>
			   </ul>
			</div>
			<!-- footer social end-->
			<div class="footer-menu text-center mb-25">
			   <ul>
				  <li><a href="about-us">About Eventime</a></li>
				  <li><a href="blogs">Blog</a></li>
				  <li><a href="contact">Contact</a></li>
				  <li><a href="pricing">Tickets</a></li>
				  <li><a href="venue">Venue</a></li>
			   </ul>
			</div><!-- footer menu end-->
			<div class="copyright-text text-center">
			   <p>Copyright © 2018 Exhibit. All Rights Reserved.</p>
			</div>
		 </div>
	  </div>
   </div>
</footer>
<!-- footer end-->
<div class="BackTo">
   <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
</div>
</div>
<!-- ts footer area end-->
<!-- Template custom -->
</div>
<!-- Body inner end -->

<!-- Load jQuery first -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/chro/jquery.js"></script>

<!-- Other required libraries -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/chro/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/chro/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/chro/jquery.appear.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/chro/jquery.jCounter.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/chro/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/chro/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/chro/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/chro/isotope.pkgd.min.js"></script>

<!-- ✅ Add Funfact Counter Script at the END -->
<script>
    jQuery(document).ready(function ($) {
        var skl = true;

        $(".ts-funfact").appear(function () {
            if (skl) {
                $(".counterUp").each(function () {
                    var $this = $(this);
                    var countTo = parseInt($this.attr("data-counter"), 10) || 0;

                    $({ countNum: 0 }).animate(
                        { countNum: countTo },
                        {
                            duration: 3000,
                            easing: "swing",
                            step: function () {
                                $this.text(Math.ceil(this.countNum));
                            },
                            complete: function () {
                                $this.text(countTo);
                            },
                        }
                    );
                });

                skl = false;
            }
        });
    });
</script>


<?php wp_footer(); ?>

</body>
</html>
