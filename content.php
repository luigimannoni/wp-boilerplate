<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage WP_Boilerplate
 * @since WP Boilerplate 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" class="item">
  <h1><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></h1>
  <?php the_content(); ?>
</article>
