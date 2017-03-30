<?php
/**
 * Шаблон Практики (practice.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<?php $args = array('post_type' => 'practice');

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="practice">
	<div class="main-wrapper">
		<div class="row-custom">
			<div class="col-12">
				<h3><?php the_title(); ?></h3>
				<p><?php content(); ?></p>
			</div>
		</div>
	</div>

</div>
<?php endwhile;?>
<?php get_footer(); // подключаем footer.php ?>
