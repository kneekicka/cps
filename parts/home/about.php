<div class="about">
	<div class="main-wrapper">

		<div class="row-custom">
			<div class="col-12">
				<p class="overall__header">
					<?php if(pll_current_language() == "ru"){ ?>
						О нас
					<?php } else {?>
						About us
					<?php } ?>
				</p>
				<div class="overall__logo"></div>
			</div>
		</div>

		<!-- About content -->
		<div class="about__text">
			<?php if ( have_posts() ) {while ( have_posts() ) { the_post(); ?>
				<?php the_content(); ?>
			<?php } }?>
		</div>
		<!-- About content end -->
	</div>
</div>