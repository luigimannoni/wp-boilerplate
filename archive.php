<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, WP Boilerplate
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP_Boilerplate
 * @since WP Boilerplate 1.0
 */

get_header(); 
?>
<section id="content" role="main">
	
    <a href="/"><?php the_title(); ?></a>
    

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
<?php
get_footer();
