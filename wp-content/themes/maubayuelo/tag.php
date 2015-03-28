

<?php get_header(); ?>
    <section id="content" role="main" class="container">
      <div class="row row-bottom-margin">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          	<header class="header">
			<h1 class="entry-title"><?php _e( 'Tag Archives: ', 'blankslate' ); ?><?php single_tag_title(); ?></h1>
			</header>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        </div>
      </div>
    </section>
  <?php get_footer(); ?>
