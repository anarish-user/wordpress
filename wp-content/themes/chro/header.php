<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage chro
 * @since chro 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="https://gmpg.org/xfn/11">


<meta charset="utf-8">

<!-- Mobile Specific Metas ================================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<!-- Site Title -->
<title>Path </title>




<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->





<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/chro/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/chro/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/chro/animate.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/chro/magnific-popup.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/chro/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/chro/isotop.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/chro/xsIcon.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/chro/responsive.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body>
   <div class="body-inner">
      <!-- Header start -->
      <header id="header" class="header header-classic">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
               <!-- logo-->
               <a class="navbar-brand" href="index.html">
			         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-v2.png" alt="Site Logo">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                  aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">

                  <ul class="navbar-nav ml-auto">
                     <li class="dropdown nav-item active">
                     <a href="#" class="" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                              <li><a href="index.html">Home One</a></li>
                              <li><a href="index-2.html">Home Two</a></li>
                              <li><a href="index-3.html">Home Three</a></li>
                              <li><a href="index-4.html">Home Four</a></li>
                              <li><a href="index-5.html">Home Five</a></li>
                              <li><a href="index-6.html">Home Six</a></li>
                              <li><a href="index-7.html">Home Seven</a></li>
                        </ul>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="#" class="" data-toggle="dropdown">About <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="about-us">About Us</a></li>
                           <li><a href="gallery">Gallery</a></li>
                           <li><a href="faq">FAQ</a></li>
                           <li><a href="pricing-page">Pricing Table</a></li>
                           <li><a href="sponsors">Sponsors</a></li>
                           <li><a href="venue">Venue</a></li>
                           <li><a href="404.html">Erro Page</a></li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="" data-toggle="dropdown">Speakers <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="speakers-1.html">Speakers-1</a></li>
                           <li><a href="speakers-2.html">Speakers-2</a></li>
                        </ul>

                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="" data-toggle="dropdown">Schedule <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                              <li><a href="schedule-list.html">Schedule List</a></li>
                              <li><a href="schedule-tab-1.html">Schedule Tab 1</a></li>
                              <li><a href="schedule-tab-2.html">Schedule Tab 2</a></li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#"> Blog <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="blogs">Blog</a></li>
                           <li><a href="blog-details">Blog Details</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="contact">Contact</a>
                     </li>
                     <li class="header-ticket nav-item">
                        <a class="ticket-btn btn" href="pricing.html"> Buy  Ticket
                        </a>
                     </li>
                  </ul>

               </div>
            </nav>
         </div><!-- container end-->
      </header>