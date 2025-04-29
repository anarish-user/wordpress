<?php

/*
Template Name: Blogs
*/

get_header(); ?>

<?php 
the_content();
?>



<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, // All posts
);

$all_posts = new WP_Query($args);

if ($all_posts->have_posts()) :
    while ($all_posts->have_posts()) : $all_posts->the_post();
        the_title('<h2>', '</h2>');
        the_excerpt();
    endwhile;
    wp_reset_postdata();
else :
    echo 'No posts found.';
endif;
?>





<div id="page-banner-area" class="page-banner-area" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/hero_area/banner_bg.jpg');'">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Event Blogs</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Exhibit /</a>
                  </li>
                  <li>
                     Blog 
                  </li>
               </ol>
            </div>
         </div><!-- Subpage title end -->
      </div>




      <section id="main-container" class="main-container">
         <div class="container">
            <div class="row">

               <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
                  <div class="post">
                     <div class="post-media post-image">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog1.jpg" class="img-fluid" alt=""></a>
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
												<a href="#">BY Admin</a>
											</span>

                           <div class="post-meta-date">
                              <span class="day">29</span>
                              <span class="month">October</span>
                              <span class="year">2018</span>
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                              <a href="#">Met Gala planner to the oversee inauguration 
													events why virtual reality</a>
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p>How you transform your business asap technology, consumer habit industry on dynamic web
                              design change? Find out from those leading the charge Met Gala</p>
                        </div>

                        <div class="post-footer">
                           <a href="Blog-details" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                        </div>

                     </div><!-- post-body end -->
                  </div><!-- 1st post end -->
                  <div class="post">
                     <div class="post-media post-image">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog2.jpg" class="img-fluid" alt=""></a>
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
													<a href="#">BY Admin</a>
												</span>

                           <div class="post-meta-date">
                              <span class="day">29</span>
                              <span class="month">October</span>
                              <span class="year">2018</span>
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                              <a href="#">Met Gala planner to the oversee inauguration 
														events why virtual reality</a>
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p>How you transform your business asap technology, consumer habit industry on dynamic web
                              design change? Find out from those leading the charge Met Gala</p>
                        </div>

                        <div class="post-footer">
                           <a href="Blog-details" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                        </div>

                     </div><!-- post-body end -->
                  </div><!-- 2nd post end -->
                  <div class="post">
                     <div class="post-media post-image">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog3.jpg" class="img-fluid" alt=""></a>
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
														<a href="#">BY Admin</a>
													</span>

                           <div class="post-meta-date">
                              <span class="day">29</span>
                              <span class="month">October</span>
                              <span class="year">2018</span>
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                              <a href="#">Met Gala planner to the oversee inauguration 
															events why virtual reality</a>
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p>How you transform your business asap technology, consumer habit industry on dynamic web
                              design change? Find out from those leading the charge Met Gala</p>
                        </div>

                        <div class="post-footer">
                           <a href="Blog-details" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                        </div>

                     </div><!-- post-body end -->
                  </div><!-- 3rd post end -->

                  <div class="pages mt-60">
                     <nav aria-label="Page navigation ">
                        <ul class="pagination mx-auto">
                           <li class="page-item"><a class="page-link" href="#">1</a></li>
                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                        </ul>
                     </nav>
                  </div>

               </div><!-- Content Col end -->

            </div><!-- Main row end -->

         </div><!-- Container end -->
		</section><!-- Main container end -->
		


      <?php
get_footer(); ?>