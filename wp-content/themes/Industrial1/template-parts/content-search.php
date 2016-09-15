<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

			
				<article class="products-list-container clearfix">
						<figure class="products-list-image-container">
							<a href="<?php the_permalink(); ?>"><?php post_thumbnail();?></a>
						</figure>
						<div class="products-list-text">
							<h2><a href="<?php get_permalink();?>"><?php the_title();?></a></h2>
							<?php the_excerpt(); ?>
						</div>
				</article><!-- #post-## -->
