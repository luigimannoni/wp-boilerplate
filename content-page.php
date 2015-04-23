<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage WP_Boilerplate
 * @since WP Boilerplate 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h1><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></h1>
  <?php the_content(); ?>
</article>
