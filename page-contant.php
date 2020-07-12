<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<!-- Contacts -->

<section>
	<div class="container-fluid no-padding">

		<div class="col-lg-6 col-lg-12 col-sm-12 col-xs-12 no-padding">
			<!-- Google map -->
			<div id="map" style="height: 820px"></div>
			<script>
				var map;
				function initMap() {
					map = new google.maps.Map(document.getElementById('map'), {
						center: {lat: 34.0151244, lng: -118.4729871},
						zoom: 12,
						scrollwheel: false//set to true to enable mouse scrolling while inside the map area
					});
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBESxStZOWN9aMvTdR3Nov66v6TXxpRZMM&callback=initMap"
					async defer>
			</script>

			<!-- End Google map -->
		</div>

		<div class="col-lg-3 col-lg-offset-1 col-md-12 col-sm-12 pt100 pb100">
			<div class="breadcrumbs-wrap inline-items">
				<a href="#" class="btn btn--transparent btn--round">
					<svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
				</a>

				<ul class="breadcrumbs">
					<li class="breadcrumbs-item">
						<a href="index.html">Pages</a>
						<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
					</li>
					<li class="breadcrumbs-item active">
						<span>Events</span>
						<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
					</li>
				</ul>
			</div>

			<div class="crumina-module crumina-heading">
				<h3 class="heading-title">Get in Touch with Us</h3>
				<div class="heading-text">Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
					in futurum laritas est etiam processus.
				</div>
			</div>
			<div class="widget w-contacts w-contacts--style2 ">
				<div class="contact-item display-flex">
					<svg class="utouch-icon utouch-icon-placeholder-3"><use xlink:href="#utouch-icon-placeholder-3"></use></svg>
					<span class="info">795 South Park Avenue, Melbourne, Australia</span>
				</div>
				<div class="contact-item display-flex">
					<svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
					<div class="info-wrap">
						<span class="info">8 800 567.890.11 <span>- Central Office</span></span>
						<span class="info">8 800 567.890.12 <span>- Fax</span></span>
					</div>
				</div>
				<div class="contact-item display-flex">
					<svg class="utouch-icon utouch-icon-message"><use xlink:href="#utouch-icon-message"></use></svg>
					<a href="#" class="info">support@utouch.com</a>
				</div>

				<a href="#" class="btn btn--grey btn--with-shadow js-message-popup cd-nav-trigger">
					Send a Message
				</a>
			</div>

		</div>

	</div>
</section>

	<!-- ... end Contacts -->

</div>
<?php get_footer(); ?>