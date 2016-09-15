<?php
/*
	Template Name: Home Template
 */
get_header(); ?>
<section id="pageTitle"></section>

<section id="pageJumbo">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
			<li data-target="#carousel-example-generic" data-slide-to="5"></li>
			<li data-target="#carousel-example-generic" data-slide-to="6"></li>
			<li data-target="#carousel-example-generic" data-slide-to="7"></li>
			<li data-target="#carousel-example-generic" data-slide-to="8"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="container">
			<!-- Controls -->
			<a class="carousel-btn carousel-btn-left" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-btn carousel-btn-right" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

			<div class="carousel-inner" role="listbox">
				<div class="item active">
							<a href="sonev/we-are-experts">
								<img src="wp-content/themes/Industrial1/images/slider01.jpg" alt="...">

								<div id="home-jumbo-container">

									<div class="jumbo-post">

										<?php
										$args=array(
											'category_name' =>'home-jumbo',
											'orderby'=>'title',
											'order'=>'ASC',
											'post_status' => 'publish',
											'posts_per_page' => 1,
											'ignore_sticky_posts'=> 1);
										$my_query = new WP_Query($args);
										if( $my_query->have_posts() ) {
										while ($my_query->have_posts()) : $my_query->the_post();
										the_excerpt();
										?>

									</div>
									<?php
									endwhile;
									}
									wp_reset_query();  // Restore global post data stomped by the_post().
									?>
								</div>

								<div class="carousel-caption"></div>
							</a>
						</div>
				<div class="item">
							<a href="sonev/we-are-experts">
								<img src="wp-content/themes/Industrial1/images/slider02.jpg" alt="...">

								<div id="home-jumbo-container">

									<div class="jumbo-post">

										<?php
										$args=array(
											'category_name' =>'home-jumbo',
											'orderby'=>'title',
											'order'=>'ASC',
											'post_status' => 'publish',
											'posts_per_page' => 1,
											'ignore_sticky_posts'=> 1);
										$my_query = new WP_Query($args);
										if( $my_query->have_posts() ) {
										while ($my_query->have_posts()) : $my_query->the_post(); ?>
										<?php  the_excerpt(); ?>

									</div>

									<?php
									endwhile;
									}
									wp_reset_query();  // Restore global post data stomped by the_post().
									?>
								</div>

								<div class="carousel-caption"></div>
							</a>
						</div>
				<div class="item">
							<a href="sonev/we-are-experts">
								<img src="wp-content/themes/Industrial1/images/slider03.jpg" alt="...">

								<div id="home-jumbo-container">

									<div class="jumbo-post">

										<?php
										$args=array(
											'category_name' =>'home-jumbo',
											'orderby'=>'title',
											'order'=>'ASC',
											'post_status' => 'publish',
											'posts_per_page' => 1,
											'ignore_sticky_posts'=> 1);
										$my_query = new WP_Query($args);
										if( $my_query->have_posts() ) {
										while ($my_query->have_posts()) : $my_query->the_post(); ?>
										<?php  the_excerpt(); ?>

									</div>


									<?php
									endwhile;
									}
									wp_reset_query();  // Restore global post data stomped by the_post().
									?>
								</div>

								<div class="carousel-caption"></div>
							</a>
						</div>
				<div class="item">
							<a href="sonev/we-are-experts">
								<img src="wp-content/themes/Industrial1/images/slider04.jpg" alt="...">

								<div id="home-jumbo-container">

									<div class="jumbo-post">

										<?php
										$args=array(
											'category_name' =>'home-jumbo',
											'orderby'=>'title',
											'order'=>'ASC',
											'post_status' => 'publish',
											'posts_per_page' => 1,
											'ignore_sticky_posts'=> 1);
										$my_query = new WP_Query($args);
										if( $my_query->have_posts() ) {
										while ($my_query->have_posts()) : $my_query->the_post(); ?>
										<?php  the_excerpt(); ?>

									</div>


									<?php
									endwhile;
									}
									wp_reset_query();  // Restore global post data stomped by the_post().
									?>
								</div>

								<div class="carousel-caption"></div>
							</a>
					</div>
				<div class="item">
						<a href="sonev/we-are-experts">
							<img src="wp-content/themes/Industrial1/images/slider05.jpg" alt="...">

							<div id="home-jumbo-container">

								<div class="jumbo-post">

									<?php
									$args=array(
										'category_name' =>'home-jumbo',
										'orderby'=>'title',
										'order'=>'ASC',
										'post_status' => 'publish',
										'posts_per_page' => 1,
										'ignore_sticky_posts'=> 1);
									$my_query = new WP_Query($args);
									if( $my_query->have_posts() ) {
									while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<?php  the_excerpt(); ?>

								</div>

								<?php
								endwhile;
								}
								wp_reset_query();  // Restore global post data stomped by the_post().
								?>
							</div>

							<div class="carousel-caption"></div>
						</a>

				</div>
				<div class="item">
					<a href="sonev/we-are-experts">
						<img src="wp-content/themes/Industrial1/images/slider06.jpg" alt="...">

						<div id="home-jumbo-container">
							<div class="jumbo-post">

								<?php
								$args=array(
									'category_name' =>'home-jumbo',
									'orderby'=>'title',
									'order'=>'ASC',
									'post_status' => 'publish',
									'posts_per_page' => 1,
									'ignore_sticky_posts'=> 1);
								$my_query = new WP_Query($args);
								if( $my_query->have_posts() ) {
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
								<?php  the_excerpt(); ?>

							</div>
							<?php
							endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
							?>
						</div>

						<div class="carousel-caption"></div>
					</a>

			</div>
				<div class="item">
				<a href="sonev/we-are-experts">
					<img src="wp-content/themes/Industrial1/images/slider07.jpg" alt="...">

					<div id="home-jumbo-container">

						<div class="jumbo-post">

							<?php
							$args=array(
								'category_name' =>'home-jumbo',
								'orderby'=>'title',
								'order'=>'ASC',
								'post_status' => 'publish',
								'posts_per_page' => 1,
								'ignore_sticky_posts'=> 1);
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<?php  the_excerpt(); ?>

						</div>


						<?php
						endwhile;
						}
						wp_reset_query();  // Restore global post data stomped by the_post().
						?>
					</div>

					<div class="carousel-caption"></div>
				</a>

			</div>
				<div class="item">
				<a href="sonev/we-are-experts">
					<img src="wp-content/themes/Industrial1/images/slider08.jpg" alt="...">

					<div id="home-jumbo-container">

						<div class="jumbo-post">

							<?php
							$args=array(
								'category_name' =>'home-jumbo',
								'orderby'=>'title',
								'order'=>'ASC',
								'post_status' => 'publish',
								'posts_per_page' => 1,
								'ignore_sticky_posts'=> 1);
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<?php  the_excerpt(); ?>

						</div>


						<?php
						endwhile;
						}
						wp_reset_query();  // Restore global post data stomped by the_post().
						?>
					</div>

					<div class="carousel-caption"></div>
				</a>

			</div>
				<div class="item">
				<a href="sonev/we-are-experts">
					<img src="wp-content/themes/Industrial1/images/slider09.jpg" alt="...">

					<div id="home-jumbo-container">

						<div class="jumbo-post">

							<?php
							$args=array(
								'category_name' =>'home-jumbo',
								'orderby'=>'title',
								'order'=>'ASC',
								'post_status' => 'publish',
								'posts_per_page' => 1,
								'ignore_sticky_posts'=> 1);
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<?php  the_excerpt(); ?>

						</div>


						<?php
						endwhile;
						}
						wp_reset_query();  // Restore global post data stomped by the_post().
						?>
					</div>

					<div class="carousel-caption"></div>
					</a>

					</div>
			</div> <!-- .carousel-inner-->
		</div> <!-- .container-->
	</div> <!-- #carousel-example-generic-->
</section>

<section id="pageMenu" >
	<div class="container">
	<div class="row">
	<article class="col-xs-6 col-sm-3">
		<div class="pageMenu-title">
			<div class="page-menu-icon wrench-icon"></div>
			<div class="pageHome-hr"></div>
			<h2>Метали</h2>
		</div>
		<div class="pageMenu-content">
			<ul>
				<li>
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-chevron-right"></span>Профили
							<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<?php
							$args=array(
								'category_name' =>'metals-profiles',
								'orderby'=>'title',
								'order'=>'ASC',
								'post_status' => 'publish',
								'posts_per_page' => 99,
								'ignore_sticky_posts'=> 1);
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
									<?php
								endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
							?>

						</ul>
					</div>
				</li>
				<li>
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-chevron-right"></span>Хидроизпитани тръби
							<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<?php
							$args=array(
								'category_name' =>'hydro-pipes',
								'orderby'=>'title',
								'order'=>'ASC',
								'post_status' => 'publish',
								'posts_per_page' => 99,
								'ignore_sticky_posts'=> 1);
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
									<?php
								endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
							?>

						</ul>
					</div>
				</li>
				<li>
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-chevron-right"></span>Електрозаварени тръби
							<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<?php
							$args=array(
								'category_name' =>'welded-pipes',
								'orderby'=>'title',
								'order'=>'ASC',
								'post_status' => 'publish',
								'posts_per_page' => 99,
								'ignore_sticky_posts'=> 1);
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
									<?php
								endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
							?>

						</ul>
					</div>
				</li>
				<li>
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-chevron-right"></span>Декоративни тръби
							<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<?php
							$args=array(
								'category_name' =>'decorative-pipes',
								'orderby'=>'title',
								'order'=>'ASC',
								'post_status' => 'publish',
								'posts_per_page' => 99,
								'ignore_sticky_posts'=> 1);
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
									<?php
								endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
							?>
						</ul>
					</div>
				</li>
				<li>
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-chevron-right"></span>Арматурно желязо
							<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<?php
							$args=array(
								'category_name' =>'reinforcement-iron',
								'orderby'=>'title',
								'order'=>'ASC',
								'post_status' => 'publish',
								'posts_per_page' => 99,
								'ignore_sticky_posts'=> 1);
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
									<?php
								endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
							?>

						</ul>
					</div>
				</li>
				<li>
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-chevron-right"></span>Ламарини
							<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<?php
							$args=array(
								'category_name' =>'sheets',
								'orderby'=>'title',
								'order'=>'ASC',
								'post_status' => 'publish',
								'posts_per_page' => 99,
								'ignore_sticky_posts'=> 1);
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
									<?php
								endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
							?>

						</ul>
					</div>
				</li>
			</ul>
		</div>
	</article>

	<article class="col-xs-6 col-sm-3">
		<div class="pageMenu-title">
			<div class="page-menu-icon drill-icon"></div>
			<div class="pageHome-hr"></div>
			<h2>Строителни материали</h2>
		</div>
		<div class="pageMenu-content pageMenu1">
			<ul>
<!--	12	items	<li><a href="#">Цимент</a></li>-->
<!--				<li><a href="#">Сухи лепила</a></li>-->
<!--				<li><a href="#">Гипсови шпакловки</a></li>-->
<!--				<li><a href="#">Топлоизолации</a></li>-->
<!--				<li><a href="#">Инертни материали</a></li>-->
<!--				<li><a href="#">Поликарбонат</a></li>-->
<!--				<li><a href="#">Итонг</a></li>-->
<!--				<li><a href="#">Метални керемиди</a></li>-->
<!--				<li><a href="#">OSB плоскости</a></li>-->
<!--				<li><a href="#">Гипсокартон</a></li>-->
<!--				<li><a href="#">PVC улуци и части</a></li>-->
<!--				<li><a href="#">Поцинковани улуци и части</a></li>-->

				<?php
				$args=array(
					'category_name' =>'building-materials',
					'orderby'=>'title',
					'order'=>'ASC',
					'post_status' => 'publish',
					'posts_per_page' => 99,
					'ignore_sticky_posts'=> 1);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<li>
							<a href="<?php the_permalink();?>">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<?php the_title(); ?>
							</a>
						</li>
						<?php
					endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>
			</ul>
		</div>
		<a href="#" id="pageMenu1-btn">Виж още <span class="caret"></span></a>
	</article>

	<article class="col-xs-6 col-sm-3">
		<div class="pageMenu-title">
			<div class="page-menu-icon iron-icon"></div>
			<div class="pageHome-hr"></div>
			<h2>Железария</h2>
		</div>
		<div class="pageMenu-content pageMenu2">
			<ul>
<!--	21	items	<li><a href="#">Алкидни бои и грундове</a></li>-->
<!--				<li><a href="#">Вододесперсионни бои</a></li>-->
<!--				<li><a href="#">Лак за дърво</a></li>-->
<!--				<li><a href="#">Силикони</a></li>-->
<!--				<li><a href="#">Монтажни лепила и пяни</a></li>-->
<!--				<li><a href="#">Крепежни елементи</a></li>-->
<!--				<li><a href="#">PVC тръби и фитинги</a></li>-->
<!--				<li><a href="#">Поцинковани фитинги</a></li>-->
<!--				<li><a href="#">Инструменти</a></li>-->
<!--				<li><a href="#">Градински инструменти и пособия</a></li>-->
<!--				<li><a href="#">Работно облекло</a></li>-->
<!--				<li><a href="#">Електроди</a></li>-->
<!--				<li><a href="#">Дискове за рязане на метал</a></li>-->
<!--				<li><a href="#">Въжета и сапани</a></li>-->
<!--				<li><a href="#">Гвоздеи</a></li>-->
<!--				<li><a href="#">Телове</a></li>-->
<!--				<li><a href="#">Оградни мрежи и пана</a></li>-->
<!--				<li><a href="#">Засенчващи мрежи</a></li>-->
<!--				<li><a href="#">Мрежи за топлоизолация</a></li>-->
<!--				<li><a href="#">Кабели и ел. консумативи</a></li>-->
<!--				<li><a href="#">Стълби</a></li>-->

				<?php
				$args=array(
					'category_name' =>'ironmongery',
					'orderby'=>'title',
					'order'=>'ASC',
					'post_status' => 'publish',
					'posts_per_page' => 99,
					'ignore_sticky_posts'=> 1);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<li>
							<a href="<?php the_permalink();?>">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<?php the_title(); ?>
							</a>
						</li>
						<?php
					endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>

			</ul>
		</div>
		<a href="#" id="pageMenu2-btn">Виж още <span class="caret"></span></a>
	</article>

	<article class="col-xs-6 col-sm-3">
		<div class="pageMenu-title">
			<div class="page-menu-icon build-icon"></div>
			<div class="pageHome-hr"></div>
			<h2>Услуги</h2>
		</div>
		<div class="pageMenu-content">
			<ul>
				<?php
				$args=array(
					'category_name' =>'services',
					'orderby'=>'title',
					'order'=>'ASC',
					'post_status' => 'publish',
					'posts_per_page' => 99,
					'ignore_sticky_posts'=> 1);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<li>
							<a href="<?php the_permalink();?>">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<?php the_title(); ?>
							</a>
						</li>
						<?php
					endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>

			</ul>
		</div>
	</article>
	</div>
	</div>
</section>

<section id="pageContent" class="pageContent-section">
	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<h2>Кои сме ние</h2>
				<div class="pageHome-hr"></div>
				<img class="img-responsive" src="wp-content/themes/Industrial1/images/image1.jpg">
				<p>Известен факт е, че читателя обръща внимание на съдържанието, което чете, а не на оформлението му. Свойството на Lorem Ipsum е, че до голяма степен има нормално разпределение на буквите и се чете по-лесно, за разлика от нормален текст на английски език като "Това е съдържание, това е съдържание".</p>
			</div>
			<div class="col-xs-12 col-sm-6 pageContent-right-column">

				<article class="page-home-container clearfix">

					<div class="page-home-text">
						<h2>Какво правим?</h2>
						<div class="pageHome-hr"></div>
						<p>Някой от тези сайтове биват променяни с времето, а други по случайност или нарочно(за забавление и пр.) биват оставяни в този си незавършен вид.</p>
					</div>
				</article>

				<article class="page-home-container clearfix">

					<div class="page-home-text">
						<h2>Защо хора като нас?</h2>
						<div class="pageHome-hr"></div>
						<p>Всички Lorem Ipsum генератори в Интернет използват предефинирани пасажи, който се повтарят, което прави този този генератор първия истински такъв</p>
					</div>
				</article>

				<article class="page-home-container clearfix">

					<div class="page-home-text">
						<h2>Какво предлагаме?</h2>
						<div class="pageHome-hr"></div>
						<p>Ако искате да използвате пасаж от Lorem Ipsum, трябва да сте сигурни, че в него няма смущаващи или нецензурни думи</p>
					</div>
				</article>

				<?php
				$args=array(
					'category_name' =>'side-posts',
					'post_status' => 'publish',
					'posts_per_page' => 3,
					'ignore_sticky_posts'=> 1);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
								<article class="sideProduct-item-image-container"><?php post_thumbnail();?>
									<div class="product-item-text">
										<?php the_title(); ?>
									</div>
								</article>
						<?php
					endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>

			</div>
		</div>
	</div>
</section>
<section id="pageThumbs">
	<h2>Запознайте се с екипа</h2>
	<div class="pageHome-hr"></div>
	<div class="container">
	<article class="col-xs-6 col-sm-3">
		<img src="wp-content/themes/Industrial1/images/manager1.png">
		<p>Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия</p>
		<h3>Иван Георгиев</h3>
		<p>Прожект мениджър</p>
	</article>
	<article class="col-xs-6 col-sm-3">
		<img src="wp-content/themes/Industrial1/images/manager2.png">
		<p>Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия</p>
		<h3>Петър Миланов</h3>
		<p>Архитект</p>
	</article>
	<article class="col-xs-6 col-sm-3">
		<img src="wp-content/themes/Industrial1/images/manager3.png">
		<p>Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия</p>
		<h3>Николай Николов</h3>
		<p>Мениджър продажби</p>
	</article>
	<article class="col-xs-6 col-sm-3">
		<img src="wp-content/themes/Industrial1/images/manager4.png">
		<p>Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия</p>
		<h3>Станимир Минчев</h3>
		<p>Мениджър качество</p>
	</article>
	</div>
</section>

<?php get_footer(); ?>

<script>
	// using wordpress jquery
	var $j = jQuery.noConflict();
	$j(document).ready(function(){
		// menu building materials
		$j( "#pageMenu1-btn" ).mouseenter(function() {
			$j( ".pageMenu1" )
				.addClass("pageMenu-toggle")
				.animate({
				height: ["+=210","linear"]
			}, 200, function() {
				// Animation complete.
			});
			return false
		});

			$j(".pageMenu1").mouseleave(function() {
				if  ($j(this).height() >= 420) {
						$j(this)
							.css({"height": "210"})
							.removeClass("pageMenu-toggle");
				}
				return false;
			});

		// menu ironmongery
		$j( "#pageMenu2-btn" ).mouseenter(function() {
			$j( ".pageMenu2" )
				.addClass("pageMenu-toggle")
				.animate({
				height: ["+=507","linear"]
			}, 200, function() {
				// Animation complete.
			});
			return false
		});

		$j(".pageMenu2").mouseleave(function() {
				if  ($j(this).height() >= 717) {
					$j(this)
						.css({"height":"210"})
						.removeClass("pageMenu-toggle");
				}
			return false;
		});

		// menu metals
		$j(".dropdown button").mouseenter(function() {
			$j(this).parent(".dropdown").addClass("open");
			return false;
		});

		$j(".dropdown").mouseleave(function() {
			$j(this).removeClass("open");
			return false;
		});

		// navbar active class
		$j("#menu-primary-menu li:eq(0)").css("background-color", "#df0024");
		$j("#menu-primary-menu a:eq(0)").css("color","#fff");
	});
</script>