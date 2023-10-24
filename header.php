<!DOCTYPE html>
<html lang=" <?php language_attributes() ?> ">

  <head>

    <meta charset=" <?php bloginfo("charset") ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title><?php bloginfo("title") ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="  <?php  echo get_template_directory_uri() ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="  <?php  echo get_template_directory_uri() ?>/assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="  <?php  echo get_template_directory_uri() ?>/assets/css/owl.css">
    <link rel="stylesheet" href="  <?php  echo get_template_directory_uri() ?>/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
<?php wp_head() ?>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href=" <?php echo get_home_url() ?> " class="logo">
                        <h1> <?php bloginfo("title") ?> </h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <!-- <ul class="nav">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="properties.html" class="active">Properties</a></li>
                      <li><a href="property-details.html">Property Details</a></li>
                      <li><a href="contact.html">Contact Us</a></li>
                      <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li>
                  </ul>    -->
                    <!-- ***** Menu End ***** -->

                    <?php
wp_nav_menu( array(
    'menu'                => "ul", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
    'menu_class'        => "nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
    'menu_id'            => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
    'container'            => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
    'container_class'    => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
    'container_id'        => "", // (string) The ID that is applied to the container.
    // 'fallback_cb'        => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
    // 'before'            => "", // (string) Text before the link markup.
    // 'after'                => "", // (string) Text after the link markup.
    // 'link_before'        => "", // (string) Text before the link text.
    // 'link_after'        => "", // (string) Text after the link text.
    // 'echo'                => "", // (bool) Whether to echo the menu or return it. Default true.
    // 'depth'                => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
    // 'walker'            => "", // (object) Instance of a custom walker class.
    'theme_location'    => "main_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be 
));

?>


                </nav>
            </div>
        </div>
    </div>
  </header>