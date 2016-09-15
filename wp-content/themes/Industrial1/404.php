<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="pageContent">
		<div class="container">

			<section class="error-404 not-found">

					<h1><?php _e( 'Oops! That page can&rsquo;t be found. (404)', 'honeyfinger' ); ?></h1>

					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'honeyfinger' ); ?></p>

					<?php get_search_form(); ?>

			</section><!-- .error-404 -->

		</div><!-- .site-main -->

	</div><!-- .content-area -->

<?php get_footer(); ?>
