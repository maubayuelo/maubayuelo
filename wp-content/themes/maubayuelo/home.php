<?php get_header(); ?>
  <!-- Main Slideshow -->
        <?php
            if(ICL_LANGUAGE_CODE=='en'){ ?>
             
            <?php
              echo do_shortcode('[new_royalslider id="1"]');
              echo do_shortcode('[new_royalslider id="3"]');
            ?>
             
            <?php }
            if(ICL_LANGUAGE_CODE=='fr'){ ?>
             
              <?php
                echo do_shortcode('[new_royalslider id="4"]');
                echo do_shortcode('[new_royalslider id="6"]');
              ?>
         
        <?php } ?>
    <!-- /Main Slideshow -->
<?php get_footer(); ?>