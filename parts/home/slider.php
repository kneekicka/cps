<!-- Slider -->
<div class="slider-wrapper">
	<div class="row-custom">
	    <div class="col-12">
	        <div class="slider">

				<?php $args = array(
					'post_type' => 'slider',
				);

				$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>

		            <div class="slider__item">
		            	<div class="slider__content-wrapper">
			            	<p><?php the_title(); ?></p>
							<a href="<?php echo get_home_url(); echo get_field("slider_link"); ?>" class="slider__link"><?php echo get_field("slider_button_text"); ?><span class="arrow-wrapper">&nbsp;&nbsp;&nbsp;</span></a>
						</div>
		                <img src="<?php echo get_field("slider_photo"); ?>" alt="">
		            </div>

		        <?php endwhile;?>

	        </div>
	    </div>
	</div>
</div>
<!-- Slider end-->