<div class="product-item col-xs-12 col-sm-8 col-sm-offset-2">
	<div class="product-item-content clearfix">
		<div class="product-item-image-container">
			<a href="<?php the_permalink(); ?>">
				<?php post_thumbnail(); ?>
			</a>
			<div class="image-decoration"></div>
		</div>
		<div class="content-product-item-text">
			<a href="<?php the_permalink();?>" class="font1"><?php the_title(); ?></a>
			<p><?php the_content(); ?></p>
		</div>
	</div>
</div>