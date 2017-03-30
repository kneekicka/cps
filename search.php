<?php
/**
 * Шаблон поиска (searching.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<div class="searching">
	<div class="main-wrapper">
		<div class="row-custom">
			<div class="col-12">
				<?php if (have_posts()): ?>
					<?php if(pll_current_language() == "ru"){ ?>
						<h1 class="searching__title"><?php printf('Поиск результатов для: %s', get_search_query()); // заголовок поиска ?></h1>
						<p class="searching__found-qtt">
							Всего найдено: <span class="red"><?php $allsearching = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearching->post_count; echo $count . ' '; wp_reset_query(); ?></span>
						</p>
					<?php } else {?>
						<h1 class="searching__title"><?php printf('Search result for: %s', get_search_query()); // заголовок поиска ?></h1>
						<p class="searching__found-qtt">
							Found: <span class="red"><?php $allsearching = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearching->post_count; echo $count . ' '; wp_reset_query(); ?></span>
						</p>
					<?php } ?>

				<?php else: ?>
					<?php if(pll_current_language() == "ru"){ ?>
						<h1 class="searching__title">Ничего не найдено</h1>
					<?php } else {?>
						<h1 class="searching__title">Nothing found</h1>
					<?php } ?>
				<?php endif; ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
					<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
				<?php endwhile; // конец цикла
				else: ?>
					<?php if(pll_current_language() == "ru"){ ?>
						<p class="searching__no-res">Извините, но ничего не соответствуют условиям поиска. <br>
						Пожалуйста, попытайтесь снова с другими ключевыми словами.</p>
					<?php } else {?>
						<p class="searching__no-res">Sorry, but nothing matches search query. <br>
						Please, try again with another keywords.</p>
					<?php } ?>
 
					<div class="searching__search-form"><?php get_search_form(); ?></div>
				<?php endif; // если записей нет, напишим "простите" ?>	 
				<?php pagination(pll_current_language()); // пагинация, функция нах-ся в function.php ?>

			</div>
		</div>
	</div>
</div>
<?php get_footer(); // подключаем footer.php ?>