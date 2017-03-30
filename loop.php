<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */ 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <?php // заголовок поста и ссылка на его полное отображение (single.php) ?>

	<div class="row">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="col-sm-3">
				<a href="<?php the_permalink(); ?>" class="thumbnail">
					<?php the_post_thumbnail(); ?>
				</a>
			</div>
		<?php } ?>
		<div class="<?php if ( has_post_thumbnail() ) { ?>col-sm-9<?php } else { ?>col-sm-12<?php } // разные классы в зависимости есть ли миниатюра ?>">
			<div class="searching__content"><?php echo content(30); ?></div>
			<p class="searching__part">
				<?php if(pll_current_language() == "ru"){ ?>
					Раздел:
				<?php } else {?>
					Chapter:
				<?php } ?>
			

			<span class="red">
			<?php 
				$post_type = get_post_type(); 
				$the_post_type = get_post_type_object($post_type);

				if(pll_current_language() == "ru"){
					echo $the_post_type->label;
				} else {
					switch ($the_post_type->label) {
					    case "Команда":
					        echo "Team";
					        break;
					    case "Практики":
					        echo "Practices";
					        break;
					    case "Pages":
					        echo "Pages";
					        break;
					    case "Блог":
					        echo "Blog";
					        break;
					    case "Новости":
					        echo "News";
					        break;
					}
				}

				?></span></p>

		</div>
	</div>
</article>