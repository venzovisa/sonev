<?php
/*
	Template Name: Contacts Template
 */
get_header(); ?>
<section id="pageTitle">
	<div class="container">
		<h1 class="font1"><?php the_title(); ?></h1>
	</div>
</section>

<div id="pageContent" class="page-contacts">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">

				<p>
					Office:
					<?php
					$address_office = get_page_by_path('address-office',"OBJECT",'post');
					echo($address_office == null ? "Missing page 'address-office'" : nl2br($address_office->post_content));
					?>
				</p>
				<p> Mail:
					<?php $contacts_email = get_page_by_path('contacts-email',"OBJECT",'post');?>
					<a href="mailto:<?php echo nl2br($contacts_email->post_content);?>">
						<?php echo($contacts_email == null ? "Missing page 'contacts-email'" : nl2br($contacts_email->post_content));?>
					</a>
				</p>
				<p>
					Phone:
					<?php
					$contacts_phone = get_page_by_path('contacts-phone',"OBJECT",'post');?>
					<a href="tel:<?php echo preg_replace('/\s/', '', nl2br($contacts_phone->post_content));?>">
						<?php echo($contacts_phone == null ? "Missing page 'contacts-phone'" : nl2br($contacts_phone->post_content)); ?>
					</a>
				</p>

				<div id="googleMaps">
					<a href="https://www.google.com/maps/place/Русе,+Иван+Ведър+№5/"><img src="http://maps.googleapis.com/maps/api/staticmap?center=Русе,+Иван+Ведър+№5&zoom=16&scale=2&size=500x200&maptype=roadmap&format=jpg&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:%7CРусе,+Иван+Ведър+№5" alt="Google Map of Русе, Иван Ведър №5"></a>
				</div>
			</div>
			<div class="col-sm-6">
				<h2>Изпратете съобщение</h2>
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
				?>
			</div>
		</div>
	</div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
<script>
	var $j = jQuery.noConflict();
	$j(document).ready(function(){
		$j("#menu-primary-menu li:eq(4)").css("background-color", "#df0024");
		$j("#menu-primary-menu a:eq(4)").css("color","#fff");
	});
</script>
