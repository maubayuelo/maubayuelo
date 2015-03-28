


<?php get_header(); ?>
<section id="content" role="main" class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row row-bottom-margin">
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<header class="header">
				<h1 class="entry-title"><?php _e( 'Category Archives: ', 'blankslate' ); ?><?php single_cat_title(); ?></h1>
				<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
			</header>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
		</div>
	</div>
	<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
