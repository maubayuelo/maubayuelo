<?php get_header(); /*
Template Name: Projects page
*/
?>
    <?php get_header(); ?>
    <section id="content" role="main" class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row row-bottom-margin">
        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header">
            <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
            </header>
            <section class="entry-content">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php the_content(); ?>
            <div class="entry-links"><?php wp_link_pages(); ?></div>
            </section>
          </article>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
        </div>
      </div>
    <?php endwhile; endif; ?>
    </section>
  <?php get_footer(); ?>
    <!-- /About -->