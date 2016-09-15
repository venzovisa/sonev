<?php
/**
 * The template for displaying all single posts and attachments
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
				<h1 class="font1"><?php the_title(); ?></h1>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<div id="pageContent">
<div class="container">
	<div class="row">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );
			// End of the loop.
		endwhile;
		?>
	</div><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>
	</div>
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php
$category = get_the_category();
$firstCategory = $category[0]->cat_name;
	if (strcasecmp($firstCategory, "services") == 0) { ?>
		<script>
			var $j = jQuery.noConflict();
			$j(document).ready(function() {
				$j("#headerBackground").addClass("headerBackground-services");
			});
		</script>
	<?php }  else if (strcasecmp($firstCategory, "building-materials") == 0) { ?>
		<script>
			var $j = jQuery.noConflict();
			$j(document).ready(function() {
				$j("#headerBackground").addClass("headerBackground-building-materials");
			});
		</script>
	<?php } else if (strcasecmp($firstCategory, "ironmongery") == 0){?>
		<script>
			var $j = jQuery.noConflict();
			$j(document).ready(function() {
				$j("#headerBackground").addClass("headerBackground-ironmongery");
			});
		</script>
	<?php } else { ?>
		<script>
			var $j = jQuery.noConflict();
			$j(document).ready(function() {
				$j("#headerBackground").addClass("headerBackground-metals");
			});
		</script>
	<?php } ?>

