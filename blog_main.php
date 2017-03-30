<?php

/**
   Template name: blog-main
 * Страница команды (blog_main.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 

<div class="blog">
	<div class="main-wrapper">
		<div class="row-custom">

			<h3 class="overall__header"><?php the_title(); ?></h3>
			<div class="overall__logo"></div>
			<div class="blog-posts">
				<?php $args = array(
					'post_type' => 'blog_post',
				);

				$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<div class="blog-post">
						<img src="<?php echo get_field( "blog_img" ); ?>" alt="">
						<p class="blog-post__title"><?php the_title(); ?></p>
						<div class="blog-post__text"><?php echo wp_trim_words( get_field( "blog_text" ), 30, '...' )?></div>
						<div class="row-custom">
							<div class="col-6">
								<a href="<?php echo get_post_permalink(); ?>" class="blog-post__more">
								
								<?php if(pll_current_language() == "ru"){ ?>
									Подробнее
								<?php } else {?>
									More
								<?php } ?>
								</a>
							</div>
							<div class="col-6 blog-post__date">
								<?php the_time('j/n/Y'); ?>
							</div>
						</div>
					</div>

					<?php endwhile;?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); // подключаем footer.php ?>