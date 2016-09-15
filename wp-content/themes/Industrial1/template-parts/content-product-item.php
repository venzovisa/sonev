<?php

$query = new WP_Query( array( 'post_type' => 'product', 'paged' => null ) );

if ( $query->have_posts() ) : ?>
	<div class="product-items row">
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="product-item col-xs-12 col-sm-6">
	<div class="product-item-content clearfix">
	<div class="product-item-image-container">
		<a href="<?php the_permalink(); ?>">
			<?php post_thumbnail(); ?>
		</a>
		<div class="image-decoration"></div>
	</div>
	<div class="product-item-text">
		<a href="<?php the_permalink();?>" class="font1"><?php the_title(); ?></a>
		<p><?php the_excerpt(); ?></p>
	</div>
	</div>
</div>
	<?php endwhile; wp_reset_postdata(); ?>
		</div>
	<!-- show pagination here -->
<?php else : ?>
	<!-- show 404 error here -->
<?php endif; ?>

