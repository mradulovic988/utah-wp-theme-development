<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Utah
 */
wp_footer();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title>Utah - HomePage</title>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/blocks.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/widgets.css">


	<!--External fonts-->

	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">



	<!-- Styles for Plugins -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/swiper.min.css">

	<!-- Font Awesome -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/assets/fontawesome/css/fontawesome-all.min.css"> -->
	

	<!--Styles for RTL-->

	<!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

	<?php wp_head(); ?>

	<!-- jQuery first, then Other JS. -->

		<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-3.2.0.min.js"></script>


		<!-- jQuery-scripts for Template -->


		<script src="<?php bloginfo('template_directory') ?>/assets/js/crum-mega-menu.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/swiper.jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/theme-plugins.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery.typeahead.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/velocity.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/form-actions.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'utah' ); ?></a>


<!-- Preloader -->

<div id="hellopreloader" style="display: block; position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 100%;background: #66b5ff url(svg/preload.svg) center center no-repeat;background-size: 41px;opacity: 1;"></div>

<!-- ... end Preloader -->

	<!-- Header -->

	<header class="header header--menu-rounded header--blue-lighteen" id="site-header">

		<div class="header-lines-decoration">
			<span class="bg-secondary-color"></span>
			<span class="bg-blue"></span>
			<span class="bg-blue-light"></span>
			<span class="bg-orange-light"></span>
			<span class="bg-red"></span>
			<span class="bg-green"></span>
			<span class="bg-secondary-color"></span>
		</div>

		<div class="container">

			<a href="#" id="top-bar-js" class="top-bar-link"><svg class="utouch-icon utouch-icon-arrow-top"><use xlink:href="#utouch-icon-arrow-top"></use></svg></a>
				<div class="header-content-wrapper">

				<div class="site-logo">
					<a href="index.html" class="full-block"></a>
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/logo.png" alt="Utouch">
					<div class="logo-text">
						<div class="logo-title"><?php bloginfo( 'name' ); ?></div>
						<div class="logo-sub-title"><?php bloginfo( 'description' ); ?></div>
					</div>
				</div>

				<nav id="primary-menu" class="primary-menu">

					<!-- menu-icon-wrapper -->

					<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
						<span class="mob-menu--title">Menu</span>
						<span id="menu-icon-wrapper" class="menu-icon-wrapper">
							<svg width="1000px" height="1000px">
								<path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
								<path id="pathE" d="M 300 500 L 700 500"></path>
								<path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
							</svg>
						</span>
					</a>
					
					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'container' => 'nav',
						'container_class' => 'primary-menu-menu',
						'menu_class' => 'primary-menu-menu'
					));
					?>

					<!-- Static Navigation Menu 

					<ul class="primary-menu-menu">
						<li class="menu-item-has-children">
							<a href="index.html">Home</a>
						</li>

						<li class="">
							<a href="#">Company</a>
							<ul class="sub-menu">
								<li>
									<a href="02_company.html">
										About Us
									</a>
								</li>

								<li>
									<a href="32_testimonials.html">
										Testimonials
									</a>
								</li>
							</ul>
						</li>

						<li class="">
							<a href="15_pricing_tables.html">Pricing</a>
						</li>
						<li class="">
							<a href="16_news.html">Blog</a>
						</li>

						<li class="">
							<a href="18_contacts.html">Contact</a>
						</li>
					</ul>
						<ul class="nav-add">
							<li class="search search_main">
								<a href="#" class="js-open-search-popup">
									<svg class="utouch-icon utouch-icon-search cd-nav-trigger"><use xlink:href="#utouch-icon-search"></use></svg>
								</a>
							</li>
						</ul>  
						<!-- End Static Navigation Menu-->


						<div class="search-standard">
							<form id="search-header" name="form-search-header" method="post">
								<div class="typeahead__container">
									<div class="typeahead__field">

							<span class="typeahead__query">
								<input class="js-typeahead" name="utouch_posts[query]" placeholder="What are you looking for?" autocomplete="off" type="search" autofocus>
							</span>
										<button type="submit" class="form-icon">
											<svg class="utouch-icon utouch-icon-search"><use xlink:href="#utouch-icon-search"></use></svg>
										</button>
										<span class="close js-popup-clear-input form-icon">
								<svg class="utouch-icon utouch-icon-cancel-1"><use xlink:href="#utouch-icon-cancel-1"></use></svg>
							</span>

									</div>
								</div>
							</form>
						</div>
					</nav>

				</div>

			</div>
		
	</header>
</div>


<div class="header-spacer"></div>

<!-- ... End Header -->

<div class="content-wrapper">
	