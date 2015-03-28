<?php get_header(); ?>
<section id="content" role="main" class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row row-bottom-margin">
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php comments_template(); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
		</div>
	</div>
	<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>

