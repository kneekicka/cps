<?php
/**
 * (header.php)
 * @package WordPress
 * @subpackage uber theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
	<header id="header">
		<div class="main-wrapper">
			<div class="row-custom">
				<div class="col-8">
					<a class="logo" href="<?php echo get_home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/header/logo.png" alt="CPS logo">
					</a>
				</div>
				<div class="col-4">
					<div class="langs">
						<?php if(pll_current_language() == "ru"){ ?>
							<?php pll_the_languages(); ?>
						<?php } else {?>
							<?php pll_the_languages(); ?>
						<?php } ?>

					</div>
					<div class="phone">
						<p>
						<?php if(pll_current_language() == "ru"){ ?>
							Экстренный вызов
						<?php } else {?>
							Emergency call
						<?php } ?>
						</p>
						<div class="phone__number-wrapper">
							<a href="tel:+380949965516">+38 (094) 996-55-16</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Menu -->
	<div class="over-wrapper">
		<div class="main-wrapper overflow-initial">
			<div class="row-custom overflow-initial">
				<div class="col-9">	
					<?php wp_nav_menu( $args ); ?>
				</div>
				<div class="col-3">
					<div class="search-form">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Menu end -->