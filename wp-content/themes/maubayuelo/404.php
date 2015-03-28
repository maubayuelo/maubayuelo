<?php get_header(); ?>
    <section id="content" role="main" class="container">
      <div class="row row-bottom-margin">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          	<article id="post-0" class="post not-found">
			<header class="header">
			<h1 class="entry-title"><?php _e( 'Not Found', 'blankslate' ); ?></h1>
			</header>
			<section class="entry-content text-center">
			<h2><?php _e( 'Nothing found for the requested page.', 'blankslate' ); ?></h2>
			<p><?php //get_search_form(); ?></p>
			</section>
			</article>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        </div>
      </div>
    </section>
  <?php get_footer(); ?>