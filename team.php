<?php

/**
   Template name: team
 * Страница команды (team.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 

<div class="team">
	<div class="main-wrapper">
		<div class="row-custom">
			<p class="overall__header">
			<?php if(pll_current_language() == "ru"){ ?>
				Команда
			<?php } else {?>
				Team
			<?php } ?>
			</p>
			<div class="overall__logo"></div>
		</div>
		
		<div class="team-wrapper">
				<?php $args = array(
					'post_type' => 'team_member',
				);

				$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
				<div class="col-6">
					<div class="team-member">
						<img class="team-member__photo" src="<?php echo get_field( "team_member_photo" ); ?>" alt="">
						<p class="team-member__name"><?php echo get_field( "team_member_name" ); ?>, <span><?php echo get_field( "team_member_prof" ); ?></span></p>
						<p class="team-member__practice">
						
						<?php if(pll_current_language() == "ru"){ ?>
							Практики:
						<?php } else {?>
							Practices:
						<?php } ?>

						</p>
						<p class="team-member__practices">
							<?php echo get_field( "team_member_practices" ); ?>
						</p>
						<div class="team-member__more-wrapper">
							<a href="<?php echo get_post_permalink(); ?>" class="team-member__more">

							<?php if(pll_current_language() == "ru"){ ?>
								Подробнее
							<?php } else {?>
								More
							<?php } ?>

							</a>
						</div>
					</div>
				</div>
 				<?php endwhile;?>

		</div>

	</div>
</div>

<?php get_footer(); // подключаем footer.php ?>