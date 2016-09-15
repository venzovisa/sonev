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

<section id="pageMenu">
	<div class="container">
		<div class="row">
			<article class="col-xs-6 col-sm-3">
				<div class="pageMenu-title pageProducts-title">
					<h2>Метали</h2>
					<div class="pageHome-hr"></div>
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
				<div class="pageMenu-title pageProducts-title">
					<h2>Строителни материали</h2>
					<div class="pageHome-hr"></div>
				</div>
				<div class="pageMenu-content">
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
			</article>

			<article class="col-xs-6 col-sm-3">
				<div class="pageMenu-title pageProducts-title">
					<h2>Железария</h2>
					<div class="pageHome-hr"></div>
				</div>
				<div class="pageMenu-content">
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
			</article>

			<article class="col-xs-6 col-sm-3">
				<div class="pageMenu-title pageProducts-title">
					<h2>Услуги</h2>
					<div class="pageHome-hr"></div>
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

<?php get_footer(); ?>

<script>
	var $j = jQuery.noConflict();

	$j(".dropdown button").mouseenter(function() {
		$j(this).parent(".dropdown").addClass("open");
		return false;
	});

	$j(".dropdown").mouseleave(function() {
		$j(this).removeClass("open");
		return false;
	});

	$j(document).ready(function(){
		$j("#menu-primary-menu li:eq(2)").css("background-color", "#df0024");
		$j("#menu-primary-menu a:eq(2)").css("color","#fff");
	});
</script>
