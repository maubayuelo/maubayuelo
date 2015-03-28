<?php get_header(); ?>
    <section id="content" role="main" class="container">
      <div class="row row-bottom-margin">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          	<?php if ( have_posts() ) : ?>
			<header class="header">
			<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
			</header>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php endwhile; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
			<?php else : ?>
			<article id="post-0" class="post no-results not-found">
			<header class="header">
			<h2 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ); ?></h2>
			</header>
			<section class="entry-content">
			<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
			<?php get_search_form(); ?>
			</section>
			</article>
			<?php endif; ?>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        </div>
      </div>
    </section>
  <?php get_footer(); ?>