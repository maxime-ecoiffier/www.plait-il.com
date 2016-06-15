<div id="accueil" class="flexslider large-12 columns data-cycle-fx="fade"
            data-cycle-speed="500"
            data-cycle-timeout="4000" ">
  <ul class="slides">
    <li>
        <?php
          $arg = array(
              'post_type' => 'post',
              'post_per_page' => 2
          );
              $loop = new WP_Query( $args);
              if ($loop->have_posts()){
                  while ($loop->have_posts()) : $loop->the_post();
          ?>
	  <div class="center-vertical">
		  <h1>PROJET<br/></h1>
          <h2><?php the_title(); ?></h2>
		  <a href="<?php the_permalink(); ?>" class="hvr-shutter-out-vertical-black">VOIR LE PROJET</a>
          <img src="<?php echo get_field("slider");?>" />
  	  </div>
    </li>
      <?php
      endwhile;
      } else {
          echo __( ' L\'article demandé n\'a pas pu être affiché');
      }
      wp_reset_query();
      ?>

  <li>
      <div class="center-vertical">
           <h1>VOUS AVEZ<br/>
                UN PROJET EN TÊTE ?</h1>
            <a href="#" class="hvr-shutter-out-vertical-black">CONTACTEZ-NOUS</a>
      </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/plait-il-slide-accueil-anne-fontaine.jpg"/>
  </li>
  </ul>
</div>




<div id="accueil" class="flexslider large-12 columns data-cycle-fx="fade"
            data-cycle-speed="500"
            data-cycle-timeout="4000" ">
  <ul class="slides">
    <li>
	  <div class="center-vertical">
		  <h1>PROJET<br/>
		  "SWAG"</h1>
		  <a href="http://localhost/www.plait-il.com/swag-2015" class="hvr-shutter-out-vertical-black">VOIR LE PROJET</a>
  	  </div>
	  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/plait-il-slide-accueil-swag.jpg"/>
    </li>
    <li>
	  <div class="center-vertical">
		  <h1>PROJET<br/>
	  	  "ANNE FONTAINE"</h1>
		  <a href="http://localhost/www.plait-il.com/anne-fontaine" class="hvr-shutter-out-vertical-black">VOIR LE PROJET</a>
  	  </div>
	  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/plait-il-slide-accueil-anne-fontaine.jpg"/>
    </li>
    <li>
		<div class="center-vertical">
			 <h1>VOUS AVEZ<br/>
		    	  UN PROJET EN TÊTE ?</h1>
			  <a href="#" class="hvr-shutter-out-vertical-black">CONTACTEZ-NOUS</a>
		</div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/plait-il-slide-accueil-anne-fontaine.jpg"/>
    </li>
  </ul>
</div>
