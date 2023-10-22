<?php  get_header() ?>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
          <h3>Properties</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Apartment</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Villa House</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Penthouse</a>
        </li>
      </ul>
      <div class="row properties-box">

      <?php   if( have_posts()) : 
                            while ( have_posts() ) :
                            the_post();     
                        ?>

        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href=" <?php the_permalink() ?> "> <?php the_post_thumbnail() ?> </a>
            <span class="category">Luxury Villa</span>
            <h6>$2.264.000</h6>
            <h4><a href=" <?php echo the_permalink() ?> "> <?php  echo the_title() ?> </a></h4>
            <ul>
              <!-- Bedrooms: 8
              Bathrooms: 8
              Area: 545m2
              Floor: 3
              Parking: 6 spots -->
              <?php the_excerpt()  ?>
            </ul>
            <div class="main-button">
              <a href="<?php  the_permalink() ?>"> See Details </a>
            </div>
          </div>
        </div>
    
        <?php 
                endwhile ;
                endif; 
                    ?>
      </div>
    </div>
  </div>

  <?php  get_footer() ?>