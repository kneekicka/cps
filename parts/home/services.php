<div class="services">

	<div class="main-wrapper">

		<div class="services__blocks">
			<!-- First row -->
			<div class="row-custom">
				<div class="col-12">
					<?php $args = array(
						'post_type' => 'practice',
						'posts_per_page' => 8
					);

					$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						?>
						<a href="<?php echo get_permalink(); ?>" class="services__block">
							<?php echo get_field( "practice_svg" ); ?>
							<p><?php the_title(); ?></p>
						</a>

					<?php endwhile;?>
				</div>
			</div>
			<!-- Second row end -->
			<!-- 24/7 help start -->
			<div class="row-custom">
				<div class="col-12">
					<a class="help" href="<?php echo get_site_url(); ?><?php if(pll_current_language() == "ru"){ ?>
							<?php echo "/practice/24-7/"; ?>
						<?php } else {?>
							<?php  echo "/en/practice/24-7-2/"; ?>
					<?php } ?>
					">
						<h3>
							<?php if(pll_current_language() == "ru"){ ?>
								24/7 адвокатский сервис
							<?php } else {?>
								24/7 attorney-at-law service
							<?php } ?>
						</h3>
						<p>
							<?php if(pll_current_language() == "ru"){ ?>
								экстренная юридическая помощь
							<?php } else {?>
								Emergency legal help
							<?php } ?>
						</p>
					</a>
				</div>
			</div>
			<!-- 24/7 help end -->
		</div>

	</div>

</div>