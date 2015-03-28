<?php get_header(); ?>
    <section id="content" role="main" class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row row-bottom-margin">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

            <?php 
            ?>
			<?php
				$cat = get_the_category();
              	$parentCatName = get_cat_name($cat[0]->parent);
				if(ICL_LANGUAGE_CODE=='en'){ ?>
							<h5 class="text-center row-top-margin" style="text-transform:uppercase"><a href="<?php echo esc_url( home_url( '/projects' ) ); ?>"><?php echo "Go back to ".$parentCatName; ?></a></h5>
							<?php }
				if(ICL_LANGUAGE_CODE=='fr'){ ?>
							<h5 class="text-center row-top-margin" style="text-transform:uppercase"><a href="<?php echo esc_url( home_url( 'fr/projets' ) ); ?>"><?php echo "Retourner aux ".$parentCatName; ?></a></h5>
            <?php } ?>
			<?php echo '<hr style="width:30%">'; ?>
            <?php get_template_part( 'entry' ); ?>

        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        </div>
      </div>
    <?php endwhile; endif; ?>
    </section>
  <?php get_footer(); ?>