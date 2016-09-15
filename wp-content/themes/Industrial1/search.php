<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="pageContent">
	<div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Резултати за: %s', 'industrial1' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			<div class="row">
				<div class="col-sm-9">
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
	
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );
	
				// End the loop.
				endwhile;
				?>
				</div>
				<div class="col-sm-3">
				</div>
			</div>
			<div id="pageProducts-pagination">
				<?php // Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( 'Предходна', 'industrial1' ),
					'next_text'          => __( 'Следваща', 'industrial1' ),
					'show_all'			=> 'true'
				) );?>
			</div>
			<?php
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
