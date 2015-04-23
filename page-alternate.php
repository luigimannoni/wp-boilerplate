<?php
/**
 * Template name: Alternate template
 *
 * @package WordPress
 * @subpackage WP_Boilerplate
 * @since WP Boilerplate 1.0
 */
get_header();
?>

<section id="content" role="main">
  <?php
    // Start the Loop.
    while ( have_posts() ) : the_post();?>
      <article id="post-<?php the_ID(); ?>" class="alternate">
        <h1><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></h1>
        <?php the_content(); ?>
      </article>

    <?php endwhile; ?>

</section>

<?php get_footer(); ?>