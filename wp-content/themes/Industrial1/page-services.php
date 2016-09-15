<?php
/*
	Template Name: Products Template
 */
get_header(); ?>

<section id="pageTitle">
	<div class="container">
		<h1 class="font1"><?php the_title(); ?></h1>
	</div>
</section>
<?php
if ( get_query_var('paged') ) $paged = get_query_var('paged');
if ( get_query_var('page') ) $paged = get_query_var('page');

//$query = new WP_Query( array( 'category_name' => 'products', 'paged' => $paged ) );?>

<div id="pageContent">
			<div class="container">
				<div class="row">
					<div id="content-page" class="col-sm-9">
						<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
						?>
					</div>
					<div class="col-sm-3">
						<?php dynamic_sidebar( 'sidebar-right' ); ?>
					</div>
				</div>
			</div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>

<script>
	var $j = jQuery.noConflict();
	$j(document).ready(function(){
		$j("#menu-primary-menu li:eq(3)").css("background-color", "#df0024");
		$j("#menu-primary-menu a:eq(3)").css("color","#fff");
	});
</script>
