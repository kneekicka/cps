<?php
/**
 * Шаблон Участника команды (single.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="team-member">
	<div class="main-wrapper">
		<div class="overall__logo"></div>
		<div class="row-custom">
			<div class="col-4">
				<img class="team-member__img" src="<?php echo get_field( "team_member_photo" ); ?>" alt="">
			</div>
			<div class="col-8">
				<div class="team-member-content">
					<p class="team-member-content__name"><?php echo get_field( "team_member_name" ); ?></p>
					<p class="team-member-content__speciality"><?php echo get_field( "team_member_prof" ); ?></p>
					<p class="team-member-content__practice">
					<?php if(pll_current_language() == "ru"){ ?>
						Практики:
					<?php } else {?>
						Practices
					<?php } ?>
					</p>
					<p class="team-member-content__practices"><?php echo get_field( "team_member_practices" ); ?></p>
					<p class="team-member-content__exp">
					<?php if(pll_current_language() == "ru"){ ?>
						Опыт работы:
					<?php } else {?>
						Experience:
					<?php } ?>
					</p>
					<p class="team-member-content__exp-text"><?php echo get_field( "team_member_xp" ); ?></p>
					<p class="team-member-content__edu">
					<?php if(pll_current_language() == "ru"){ ?>
						Образование:
					<?php } else {?>
						Education:
					<?php } ?>
					</p>
					<p class="team-member-content__edu-text"><?php echo get_field( "team_member_education" ); ?></p>
					<p class="team-member-content__langs">
					<?php if(pll_current_language() == "ru"){ ?>
						Знания языков:
					<?php } else {?>
						Languages:
					<?php } ?>
					</p>
					<p class="team-member-content__langs-text"><?php echo get_field( "team_member_langs" ); ?></p>
				</div>
			</div>
		</div>
	</div>

</div>
<?php endwhile;?>
<?php get_footer(); // подключаем footer.php ?>
