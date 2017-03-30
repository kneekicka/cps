<?php
/**
 * Шаблон формы поиска (searchform.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<form role="search" method="get" class="search-form form-inline" action="<?php echo home_url( '/' ); ?>">
	<div class="form-group">
		<label class="sr-only" for="search-field">
			<?php if(pll_current_language() == "ru"){ ?>
				Поиск
			<?php } else {?>
				Search
			<?php } ?>
		</label>
		<input type="search" class="form-control input-sm" id="search-field" placeholder="<?php if(pll_current_language() == "ru"){ ?>Поиск...<?php } else {?>Search...<?php } ?>" value="<?php echo get_search_query() ?>" name="s">
	</div>
	<button type="submit" class="btn btn-default btn-sm">
		<?php if(pll_current_language() == "ru"){ ?>
			Искать
		<?php } else {?>
			Search
		<?php } ?>
	</button>
</form>