    <!-- Testimonials -->
    <article class="testimonials_slideshow">
        <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-3 col-sm-2 col-xs-12">
              </div>
              <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12 text-center">
                  <?php
                    if(ICL_LANGUAGE_CODE=='en'){ ?>
                     
                    <?php
                      echo do_shortcode('[new_royalslider id="2"]');
                    ?>
                     
                    <?php }
                    if(ICL_LANGUAGE_CODE=='fr'){ ?>
                     
                      <?php
                        echo do_shortcode('[new_royalslider id="5"]');
                      ?>
                <?php } ?>
              </div>
              <div class="col-lg-4 col-md-3 col-sm-2 col-xs-12">
              </div> 
            </div>
        <div>
    </article>
    <!-- /Testimonials -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <!-- Social -->
        <div class="row row-bottom-margin row-top-margin">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-2">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                <a href="https://www.facebook.com/mau.bayuelo" title="" data-toggle="tooltip" data-placement="top" id="tooltip-facebook" target="_blank" data-original-title="Facebook">
                    <img src="<?php echo get_bloginfo('template_directory');?>/bootstrap/img/icon-fb.jpg" alt="Facebook">
                </a>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                <a href="https://twitter.com/maubayuelo" title="" data-toggle="tooltip" data-placement="top" id="tooltip-twitter" target="_blank" data-original-title="Twitter">
                    <img src="<?php echo get_bloginfo('template_directory');?>/bootstrap/img/icon-twitter.jpg" alt="Twitter">
                </a>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                <a href="http://www.linkedin.com/in/maubayuelo" title="" data-toggle="tooltip" data-placement="top" id="tooltip-linkedin" target="_blank" data-original-title="LinkedIn">
                    <img src="<?php echo get_bloginfo('template_directory');?>/bootstrap/img/icon-linkin.jpg" alt="LinkedIn">
                </a>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                <a href="https://dribbble.com/maubayuelo" title="" data-toggle="tooltip" data-placement="top" id="tooltip-dribbble" target="_blank" data-original-title="Dribbble">
                    <img src="<?php echo get_bloginfo('template_directory');?>/bootstrap/img/icon-behance.jpg" alt="Dribbble">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-2">
            </div>
            </div>
        <!-- /Social -->

        <!-- Contact -->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1"></div>
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <?php
                    if(ICL_LANGUAGE_CODE=='en'){ ?>
                    <h5 class="footer_txt">WEB DEVELOPMENT</h5>
                    <?php }
                    if(ICL_LANGUAGE_CODE=='fr'){ ?>
                      <h5 class="footer_txt">DÉVELOPPEMENT WEB</h5>
                    <?php }?>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <?php
                    if(ICL_LANGUAGE_CODE=='en'){ ?>
                    <h5 class="footer_txt">GRAPHIC DESIGN</h5>
                    <?php }
                    if(ICL_LANGUAGE_CODE=='fr'){ ?>
                      <h5 class="footer_txt">GRAPHISME</h5>
                    <?php }?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <?php
                    if(ICL_LANGUAGE_CODE=='en'){ ?>
                    <h5 class="footer_txt">BRANDING</h5>
                    <?php }
                    if(ICL_LANGUAGE_CODE=='fr'){ ?>
                      <h5 class="footer_txt">BRANDING</h5>
                    <?php }?>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1"></div>
        </div>
        <div class="row">
            <?php
                if(ICL_LANGUAGE_CODE=='en'){ ?>
                    <h3 class="row-bottom-margin">I am always interested in new design &amp; web projects</h3>
                    <h5 class="row-bottom-margin">(1) 514.415.4887 - <a href="mailto:info@maubayuelo.com?Subject=Hello%20again" target="_top" class="text-center">info@maubayuelo.com</a></h5>
                    <h5 class=""><?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) );?></h5>
                <?php }
                if(ICL_LANGUAGE_CODE=='fr'){ ?>
                    <h3 class="row-bottom-margin">Je suis toujours intéressé par de nouveaux projets de graphisme &amp; web</h3>
                    <h5 class="row-bottom-margin">(1) 514.415.4887 - <a href="mailto:info@maubayuelo.com?Subject=Hello%20again" target="_top" class="text-center">info@maubayuelo.com</a></h5>
                    <h5 class=""><?php echo sprintf( __( '%1$s %2$s %3$s. Tous droits réservés.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) );?></h5>
            <?php }?>
        </div>
        <!-- /Contact -->
        </div>
    </div>
    
    </footer>
    <!-- /Footer -->
        
        <script src="<?php echo get_bloginfo('template_directory');?>/bootstrap/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory');?>/bootstrap/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory');?>/bootstrap/js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        <?php wp_footer(); ?> 
    </body>
</html>
