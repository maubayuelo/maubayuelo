<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php echo '<h1 class="entry-title">'; ?>
    <?php the_title(); ?>
<?php echo '</h1>';?>
</header>
<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
</article>