<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<footer>
	<div class="main-wrapper">
		<div class="row-custom links">
			<div class="col-4">
				<div class="row-custom">
					<div class="col-12">
					<?php
						wp_nav_menu( array(
						    'menu_class'   => 'footer_menu',
						) );
					?>
					</div>
				</div>
			</div>
			<div class="col-6">
				<a href="tel:+380949965516" class="link">
				<span class="link-wrap">
				<?php if(pll_current_language() == "ru"){ ?>
					Телефон:
				<?php } else {?>
					Phone:
				<?php } ?>
				</span> +38 (094) 996-55-16
				</a>
				<a href="mailto:office@cpsattorneys.net" class="link"><span class="link-wrap">Email:</span> office@cpsattorneys.net</a>
				<p class="link"><span class="link-wrap">
				<?php if(pll_current_language() == "ru"){ ?>
					Адрес:</span> 65014, Украина, Одесса, Лермонтовский пер., 9, 3-й  этаж</p>
				<?php } else {?>
					Address:</span> 65014, Ukraine, Odessa, Lermontovskiy Lane, 9, 3rd  floor</p>
				<?php } ?>
				
			</div>
			<div class="col-2">
				<div class="row-custom icons">
					<div class="col-6">
						<a href="https://www.facebook.com/CPS-Attorneys-244715959270908" target="_blank">

							<svg version="1.1" id="fb-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
							<style type="text/css">
								.fb-icon{opacity:0.4;fill:#FFFFFF;}
							</style>
							<path class="fb-icon" d="M21.5,38.6h5.6V25h3.7l0.5-4.7h-4.2l0-2.3c0-1.2,0.1-1.9,1.9-1.9h2.3v-4.7h-3.8c-4.5,0-6.1,2.3-6.1,6.1v2.8
								h-2.8V25h2.8V38.6z M25,50C11.2,50,0,38.8,0,25C0,11.2,11.2,0,25,0s25,11.2,25,25C50,38.8,38.8,50,25,50z"/>
							</svg>

						</a>
					</div>
					<div class="col-6">
						<a href="https://www.linkedin.com/in/cps-attorneys-b04a6113b/"  target="_blank">

							<svg version="1.1" id="in-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
							<style type="text/css">
								.in-icon{opacity:0.4;fill:#FFFFFF;}
							</style>
							<path class="in-icon" d="M25,0C11.2,0,0,11.2,0,25c0,13.8,11.2,25,25,25s25-11.2,25-25C50,11.2,38.8,0,25,0z M18.6,36.8h-5.7v-17h5.7
								V36.8z M18.5,14.4c0,1.7-1.3,3-3,3c-1.7,0-3-1.3-3-3c0-1.7,1.3-3,3-3c1,0,2,0.5,2.5,1.4C18.3,13.2,18.5,13.7,18.5,14.4
								C18.5,14.3,18.5,14.3,18.5,14.4C18.5,14.3,18.5,14.3,18.5,14.4z M39,36.8L39,36.8l-5.7,0v-9.1c0-2.3-0.8-3.8-2.9-3.8
								c-1.6,0-2.5,1.1-2.9,2.1c-0.1,0.4-0.2,0.9-0.2,1.4v9.5h-5.7c0,0,0.1-15.4,0-17h5.7v2.4c0.8-1.2,2.1-2.8,5.1-2.8
								c3.7,0,6.5,2.4,6.5,7.7V36.8z"/>
							</svg>

						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row-custom rights">
			<?php if(pll_current_language() == "ru"){ ?>
				<p>© <?php echo date("Y"); ?> cpsattorneys.net Все права защищены</p>
			<?php } else {?>
				<p>© <?php echo date("Y"); ?> cpsattorneys.net All Rights Reserved</p>
			<?php } ?>
		</div>
	</div>
</footer>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>