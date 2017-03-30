<?php
/**
 * Шаблон Практики (practice.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="practice">
	<div class="main-wrapper">
		<div class="row-custom">
			<div class="col-12">
				<h3 class="overall__header"><?php the_title(); ?></h3>
				<div class="overall__logo"></div>
				<div class="practice__content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>

</div>
<?php endwhile; endif; ?>
<?php get_footer(); // подключаем footer.php ?>
