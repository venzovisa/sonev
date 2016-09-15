<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<base href="<?php echo site_url(); ?>/" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" /> <!-- remove dotted line around links -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:700,400&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="pageWrapper">
		<header id="pageHeader">
			<div class="container">
				<div id="pageLogo">
					<?php the_custom_logo(); ?>
				</div>

			<div id="headerTop">
						<?php $contacts_phone = get_page_by_path('contacts-phone',"OBJECT",'post');?>

						<a class="contactsPhone" href="tel:<?php echo preg_replace('/\s/', '', nl2br($contacts_phone->post_content));?>">
							<?php echo($contacts_phone == null ? "Missing page 'contacts-phone'" : nl2br($contacts_phone->post_content)); ?>
						</a>

						<a id="phoneIcon" href="tel:<?php echo preg_replace('/\s/', '', nl2br($contacts_phone->post_content));?>"></a>

						<?php
						$contacts_email = get_page_by_path('contacts-email',"OBJECT",'post');?>
						<a id="letterIcon" href="mailto:<?php echo nl2br($contacts_email->post_content);?>"></a>

						<a id="socialIcon" href="http://www.facebook.com/"></a>
			</div>

				<div id="header-navigation">
					<?php if ( has_nav_menu( 'primary' )) : ?>
					<div class="navbar navbar-main" role="navigation">
						<button id="navbar-main-button" type="button" class="navbar-toggle" data-role="none" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="collapse navbar-collapse">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class'     => 'nav navbar-nav',
							 ) );
							?>
						</div>
					</div>
					<?php endif; ?>
				</div>
				</div>
		</header>