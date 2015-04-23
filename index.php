<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP_Boilerplate
 * @since WP Boilerplate 1.0
 */

get_header(); ?>
<section id="content" role="main">    

	<?php if ( have_posts() ) : ?>
	<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile;

		else :
			// If no content, include the "No posts found" template.
			get_template_part( 'content', 'none' );

		endif;
	?>

</section>

<?php get_footer();
