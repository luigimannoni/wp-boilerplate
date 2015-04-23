<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
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
			<article id="post-<?php the_ID(); ?>" class="item">
				<h1><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></h1>
				<?php the_content(); ?>
			</article>

		<?php endwhile; ?>

</section>
<?php get_footer(); ?>
