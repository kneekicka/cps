<?php
/**
 * Шаблон Практики (news_main.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>

<div class="blog-post">
	<div class="main-wrapper">
		<div class="row-custom">
			<div class="col-12">
				<h3 class="overall__header">
				<?php if(pll_current_language() == "ru"){ ?>
					CPS Attorneys Новости
				<?php } else {?>
					CPS Attorneys News
				<?php } ?>
				</h3>
				<div class="overall__logo"></div>
				<div class="blog-post__content">
					<p class="blog-post__title"><?php echo get_the_title(); ?></p>
					<div class="blog-post__info">Опубликовано <span class="red"><?php dateToRussian(the_time('F n, Y')); ?></span> от <span class="red">CPS Attorneys</span></div>
					<img src="<?php echo get_field( "news_img" ); ?>" alt="">
					<p class="blog-post__text"> <?php echo get_field( "news_text" ); ?></p>
				</div>
			</div>
		</div>
		<div class="blog-post-social">
			<div class="row-custom">
				<div class="col-3 prev-post">
					<?php
					$prev_post = get_previous_post();
					if (!empty( $prev_post )): ?>
					  <a href="<?php echo $prev_post->guid ?>">

						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
						<style type="text/css">
							.prev-post0{fill:#EAEBEF;}
							.prev-post1{fill:#D1D2D3;}
							.prev-post2{fill:#373546;stroke:#373546;stroke-miterlimit:10;}
						</style>
						<g>
							<path class="prev-post0" d="M25,49.5c-13.5,0-24.5-11-24.5-24.5S11.5,0.5,25,0.5c13.5,0,24.5,11,24.5,24.5S38.5,49.5,25,49.5z"/>
							<path class="prev-post1" d="M25,1c13.2,0,24,10.8,24,24S38.2,49,25,49S1,38.2,1,25S11.8,1,25,1 M25,0C11.2,0,0,11.2,0,25s11.2,25,25,25
								s25-11.2,25-25S38.8,0,25,0L25,0z"/>
						</g>
						<g>
							<polygon class="prev-post2" points="21.5,15.5 31,25 21.5,34.5 21,34.1 30.1,25 21,15.9 	"/>
						</g>
						</svg>

					  	<p class="blog-post-social__link-text">
					  	<?php if(pll_current_language() == "ru"){ ?>
							Предыдущий пост
						<?php } else {?>
							Previous post
						<?php } ?>
					  	</p>
					  </a>
					<?php endif ?>
				</div>
				<div class="col-6">
					<div class="blog-post-social-icons">
						<?php echo do_shortcode('[sgmb id=1]'); ?>
					</div>
				</div>
				<div class="col-3 next-post">
					<?php
					$next_post = get_next_post();
					if (!empty( $next_post )): ?>
					  <a href="<?php echo $next_post->guid ?>">

						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
						<style type="text/css">
							.next-post0{fill:#EAEBEF;}
							.next-post1{fill:#D1D2D3;}
							.next-post2{fill:#373546;stroke:#373546;stroke-miterlimit:10;}
						</style>
						<g>
							<path class="next-post0" d="M25,49.5c-13.5,0-24.5-11-24.5-24.5S11.5,0.5,25,0.5c13.5,0,24.5,11,24.5,24.5S38.5,49.5,25,49.5z"/>
							<path class="next-post1" d="M25,1c13.2,0,24,10.8,24,24S38.2,49,25,49S1,38.2,1,25S11.8,1,25,1 M25,0C11.2,0,0,11.2,0,25s11.2,25,25,25
								s25-11.2,25-25S38.8,0,25,0L25,0z"/>
						</g>
						<g>
							<polygon class="next-post2" points="21.5,15.5 31,25 21.5,34.5 21,34.1 30.1,25 21,15.9 	"/>
						</g>
						</svg>

					  	<p class="blog-post-social__link-text">
							<?php if(pll_current_language() == "ru"){ ?>
								Следующий пост
							<?php } else {?>
								Next post
							<?php } ?>
					  	</p>
					  </a>
					<?php endif ?>
				</div>
			</div>
		</div>

	</div>

</div>

<?php get_footer(); // подключаем footer.php ?>
