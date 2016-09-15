<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div id="headerBackground">
	<div id="pageTitle">
		<div class="container">
			<?php while ( have_posts() ) : the_post();?>
				<h1><?php the_title(); ?></h1>
			<?php endwhile; ?>
		</div>
	</div>
</div>

<div id="pageContent">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );


			// End of the loop.
		endwhile;
		?>

</div><!-- .content-area -->
<?php get_footer(); ?>
