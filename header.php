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

  <style>
  /* Style the main navigation menu */
  .main-nav {
    text-align: center;
  }

  .main-nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .main-nav ul li {
    display: inline-block;
    margin-right: 20px;
    position: relative;
  }

  /* Style the sub-menu (dropdown) */
  .main-nav ul ul {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: rgba(0,0,0,0.2) ;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .main-nav ul li:hover > ul {
    display: block;
  }

  .main-nav ul ul li {
    display: block;
    width: 100%;
    padding: 10px 0;
    text-align: center;
  }

  /* Style links within the sub-menu */
  .main-nav ul ul li a {
    display: block;
    /* padding: 10px 20px; */
    color: #333;
    text-decoration: none;
  }

  .main-nav ul ul li a:hover {
    /* background-color: #f0f0f0; */
  }
</style>


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
                    <a href="<?php echo get_home_url(); ?>" class="logo">
                        <h1> Villa </h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <?php
                    wp_nav_menu(array(
                        'menu'            => "ul",
                        'menu_class'      => "nav",
                        'menu_id'         => "",
                        'container'       => "",
                        'container_class' => "",
                        'container_id'    => "",
                        'theme_location'  => "main_menu",
                    ));
                    ?>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
