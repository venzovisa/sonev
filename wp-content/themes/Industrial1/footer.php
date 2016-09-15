<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
			<div id="pagePushFooter"></div>

		</div><!-- pageWraper -->

		<footer id="pageFooter">
			<section class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="row">
						<div class="col-xs-12">
							<h3>Контакти</h3>
							<div class="pageHome-hr"></div>
						</div>

						<div class="col-xs-6">
							<p> E-Mail:
								<?php $contacts_email = get_page_by_path('contacts-email',"OBJECT",'post');?>
								<a href="mailto:<?php echo nl2br($contacts_email->post_content);?>">
									<?php echo($contacts_email == null ? "Missing page 'contacts-email'" : nl2br($contacts_email->post_content));?>
								</a>
							</p>
						</div>
						<div class="col-xs-6">
							<p>
								Телефон:
								<?php
								$contacts_phone = get_page_by_path('contacts-phone',"OBJECT",'post');?>
								<a href="tel:<?php echo preg_replace('/\s/', '', nl2br($contacts_phone->post_content));?>">
									<?php echo($contacts_phone == null ? "Missing page 'contacts-phone'" : nl2br($contacts_phone->post_content)); ?>
								</a>
							</p>
						</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="row">
							<div class="col-xs-12">
								<h3>Адрес</h3>
								<div class="pageHome-hr"></div>
							</div>
							<div class="col-xs-6">
								<p>
									<?php
									$address_office = get_page_by_path('address-office',"OBJECT",'post');
									echo($address_office == null ? "Missing page 'address-office'" : nl2br($address_office->post_content));
									?>
								</p>
							</div>
							<div class="col-xs-6">
								<p> Работно време: 08:00 - 17:00 </p>
								<p>	Събота и Неделя: почивни </p>
							</div>
						</div>
					</div>
			</section>
		</footer><!-- .site-footer -->
<?php wp_footer(); ?>

</body>
</html>