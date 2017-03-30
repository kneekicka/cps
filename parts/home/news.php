<div class="news">
	<div class="main-wrapper">
		<div class="row-custom">
			<div class="col-5">
				<h3 class="title">
					<?php if(pll_current_language() == "ru"){ ?>
						Новости
					<?php } else {?>
						News
					<?php } ?>
				</h3>
				<?php $args = array(
					'post_type' => 'news_post',
					'posts_per_page' => 2
				);

				$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
				<section class="section">
					<p class="section__title"><?php the_title(); ?></p>
					<div class="section__date"><?php the_time('j/n/Y'); ?></div>
					<p class="section__content"><?php echo wp_trim_words( get_field( "news_text" ), 40, '...' )?></p>
					<a href="<?php echo get_post_permalink(); ?>" class="section__more">
						<?php if(pll_current_language() == "ru"){ ?>
							Подробнее
						<?php } else {?>
							More
						<?php } ?>
					</a>
				</section>
				<?php endwhile;?>
				<div class="see-all-wrapper">
					<a href="<?php echo get_site_url(); ?>


					<?php if(pll_current_language() == "ru"){ ?>
						/novosti/
					<?php } else {?>
						/en/news/
					<?php } ?>
					" class="see-all"><span class="see-all-link">
						<?php if(pll_current_language() == "ru"){ ?>
							Все статьи
						<?php } else {?>
							All articles
						<?php } ?>
					</span><span class="see-all-arrow"> →</span></a>
				</div>
			</div>
			<div class="col-2">
				<div class="logo-wrapper">
					<div class="logo-line"></div>
						<div class="logo"></div>
					<div class="logo-line"></div>
				</div>
			</div>
			<div class="col-5">
				<h3 class="title">
					<?php if(pll_current_language() == "ru"){ ?>
						Блог
					<?php } else {?>
						Blog
					<?php } ?>
				</h3>
				<?php $args = array(
					'post_type' => 'blog_post',
					'posts_per_page' => 2
				);

				$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
				<section class="section">
					<p class="section__title"><?php the_title(); ?></p>
					<div class="section__date"><?php the_time('j/n/Y'); ?></div>
					<p class="section__content"><?php echo wp_trim_words( get_field( "blog_text" ), 40, '...' )?></p>
					<a href="<?php echo get_post_permalink(); ?>" class="section__more">
						<?php if(pll_current_language() == "ru"){ ?>
							Подробнее
						<?php } else {?>
							More
						<?php } ?>
					</a>
				</section>
				<?php endwhile;?>
				<div class="see-all-wrapper">
					<a href="<?php echo get_site_url(); ?>

					<?php if(pll_current_language() == "ru"){ ?>
						/blog/
					<?php } else {?>
						/en/blog-en/
					<?php } ?>

					" class="see-all"><span class="see-all-link">
						<?php if(pll_current_language() == "ru"){ ?>
							Все статьи
						<?php } else {?>
							All articles
						<?php } ?>
					</span><span class="see-all-arrow"> →</span></a>
				</div>
			</div>
		</div>
	</div>
</div>