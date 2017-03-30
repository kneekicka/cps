<?php

/**
   Template name: contact
 * Главная страница (contact.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="contact">
	<div class="main-wrapper">
		<div class="row-custom">
			<div class="col-12">
				<h3 class="overall__header"><?php the_title(); ?></h3>
				<div class="overall__logo"></div>
			</div>
		</div>
		<div class="row-custom">
			<div class="col-5 contact-block-wrapper">
				<div class="contact-block">
					<p class="contact-block__title">
						<?php if(pll_current_language() == "ru"){ ?>
								Наш адрес
							<?php } else {?>
								Our address
						<?php } ?>
					
					</p>
					<p class="contact-block__text">
						
							<p class="contact-block__address"><?php echo get_field( "contact_addr_country" ); ?></p>
							<p class="contact-block__address last"><?php echo get_field( "contact_addr_street" ); ?></p>
					
					<p class="contact-block__title">

						<?php if(pll_current_language() == "ru"){ ?>
								ФАКС <span class="small">(auto)</span>
							<?php } else {?>
								FAX <span class="small">(auto)</span>
						<?php } ?>
					
					</p>
					<a class="contact-link" href="tel:<?php echo get_field( 'contact_fax' ); ?>"><?php echo get_field( "contact_fax" ); ?></a>
					<p class="contact-block__title">

						<?php if(pll_current_language() == "ru"){ ?>
								Телефоны
							<?php } else {?>
								Call us
						<?php } ?>
					
					</p>
					<a class="contact-link" href="tel:<?php echo get_field( 'contact_phone1' ); ?>"><?php echo get_field( "contact_phone1" ); ?></a>
					<a class="contact-link m-t-15" href="tel:<?php echo get_field( 'contact_phone2' ); ?>"><?php echo get_field( 'contact_phone2' ); ?></a>
					<p class="contact-block__title">
					
						<?php if(pll_current_language() == "ru"){ ?>
								Почта
							<?php } else {?>
								Mail
						<?php } ?>

					</p>
					<a class="contact-link" href="mailto:<?php echo get_field( 'contact_mail' ); ?>"><?php echo get_field( 'contact_mail' ); ?></a>
				</div>
			</div>
			<div class="col-7 contact-block-wrapper">
				<div class="contact-block right">
					<p class="contact-block__title-right">
						<?php if(pll_current_language() == "ru"){ ?>
								Ходите задать вопрос? <br>
								Пожалуйста, воспользуйтесь формой ниже
							<?php } else {?>
								Do you have any questions? <br>
								Please, use the form below
						<?php } ?>
					</p>
						<?php if(pll_current_language() == "ru"){ ?>
								<?php echo do_shortcode( '[contact-form-7 id="7" title="Contact_form_ru"]' ); ?>
							<?php } else {?>
								<?php echo do_shortcode( '[contact-form-7 id="165" title="Contact_form_en"]' ); ?>
						<?php } ?>
					
				</div>
			</div>
		</div>
		<div class="row-custom">
			<div class="col-12 map-wrapper">
                    <div class="map" id="contacts_map"></div>
                    <?php $address = "";?>
                	<?php if(pll_current_language() == "ru"){ ?>
							<?php $address = "<p>CPS Attorneys</p>Лермонтовский пер. 9"; ?>
						<?php } else {?>
							<?php  $address = "<p>CPS Attorneys</p>Lermontovskiy Lane, 9"; ?>
					<?php } ?>

                    
				    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCf5C1JIGzrIYwmFWIsTpXEZiGCK5PVESI"></script>
				    <script type="text/javascript">
				        function map_initialize(c1, c2, lay) {
				            directionsDisplay = new google.maps.DirectionsRenderer();
				            var defaultCity = new google.maps.LatLng(c1, c2);
				            var mapOptions = {
				                scrollwheel: false,
				                zoom:15,
				                mapTypeId: google.maps.MapTypeId.ROADMAP,
				                center: defaultCity,
				                // styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]
				            };
				            map = new google.maps.Map(document.getElementById(lay), mapOptions);

				            new google.maps.Size(36, 57),
				            new google.maps.Point(0,0),
				            new google.maps.Point(0, 57);

				            var shape = {
				                coord: [1, 1, 1, 20, 18, 20, 18 , 1],
				                type: 'poly'
				            };

				            var marker = new google.maps.Marker({
				                position: defaultCity,
				                map: map,
				                title: '<?=get_option('address');?>',
				            });
				            var contentString = '<div class="contacts_field1"><?php echo $address; ?>';
				            var infowindow = new google.maps.InfoWindow({
				                content: contentString
				            });
				            infowindow.open(map,marker);
				            google.maps.event.addListener(marker, 'click', function() {   infowindow.open(map,marker); });

				            directionsDisplay.setMap(map);
				        }
				        map_initialize(46.47104956208117, 30.755290298914133,'contacts_map');
				    </script>
			</div>
		</div>
	</div>
</div>
<?php endwhile;?>
<?php get_footer(); // подключаем footer.php ?>