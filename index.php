<?php

/**
   Template name: home
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<?php 
include "parts/home/slider.php";
include "parts/home/about.php";
include "parts/home/services.php";
include "parts/home/news.php";
get_footer(); // подключаем footer.php ?>