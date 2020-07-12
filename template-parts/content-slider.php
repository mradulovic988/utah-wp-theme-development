<?php
/*======== HEADER =========*/
/*======== Slider 1 =========*/
$header_content = get_field('header_content');
$header_description = get_field('header_description');
$first_header_button = get_field('first_header_button');
$second_header_button = get_field('second_header_button');
$header_slide_image = get_field('header_slide_image');

/*======== Slider 2 =========*/
$header_name = get_field('header_name');
$header_content_two = get_field('header_content_two');
$header_description_two = get_field('header_description_two');
$header_description_two = get_field('header_description_two');
$first_header_button_icon = get_field('first_header_button_icon');
$first_header_button_small = get_field('first_header_button_small');
$first_header_button_big = get_field('first_header_button_big');
$second_header_button_small = get_field('second_header_button_small');
$second_header_button_big = get_field('second_header_button_big');
$second_header_button_icon = get_field('second_header_button_icon');
$first_button_link = get_field('first_button_link');
$second_button_link_two = get_field('second_button_link_two');

/*======== Slider 3 =========*/
$header_content_three = get_field('header_content_three');
$header_description_three = get_field('header_description_three');
$header_button_text_three = get_field('header_button_text_three');
$header_image_three = get_field('header_image_three');
?>

<!-- Main Slider -->

	<div class="crumina-module crumina-module-slider container-full-width">
			<div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade">

				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide bg-1 main-slider-bg-light">

						<div class="container">
							<div class="row table-cell">

								<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">

									<div class="slider-content align-center">
										<h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
											
											<?php if(empty($header_content)) { ?>
											The power of Technology
											<?php } else {
												echo $header_content;
											} ?>

											<svg class="first-decoration utouch-icon utouch-icon-arrow-left"><use xlink:href="#utouch-icon-arrow-left"></use></svg>

											<svg class="second-decoration utouch-icon utouch-icon-arrow-left"><use xlink:href="#utouch-icon-arrow-left"></use></svg>

										</h1>

										<?php if(empty($header_description)) { ?>
											<h6 class="slider-content-text" data-swiper-parallax="-200">Lorem ipsum dolor sit
											amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
											laoreet dolore magna aliquam erat volutpat.</h6>
											<?php } else { ?>
											<h6 class="slider-content-text" data-swiper-parallax="-200">
												<?php echo $header_description; ?>
											</h6>
										<?php } ?>

										<div class="main-slider-btn-wrap" data-swiper-parallax="-300">
											<?php if (empty($first_header_button)) { ?>
											<a href="03_products.html" class="btn btn--yellow btn--with-shadow">
												Learn More
											</a>
											<?php } else { ?>
												<a href="03_products.html" class="btn btn--yellow btn--with-shadow">
													<?php echo $first_header_button; ?>
												</a>
											<?php } ?>

											<?php if (empty($second_header_button)) { ?>
												<a href="02_company.html" class="btn btn-border btn--with-shadow c-primary">
													Get Started Now
												</a>
											<?php } else { ?>
												<a href="02_company.html" class="btn btn-border btn--with-shadow c-primary">
													<?php echo $second_header_button; ?>
												</a>
											<?php } ?>
											

											
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
										
										<?php if (!empty($header_slide_image)) { ?>
											<img src="<?php echo $header_slide_image['url']; ?>" alt="<?php echo $header_slide_image['alt']; ?>">
										<?php } else { ?>
											<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/slides1.png" alt="slider">
										<?php } ?>

									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="swiper-slide bg-2 main-slider-bg-light">

						<div class="container table">
							<div class="row table-cell">

								<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
									<div class="slider-content align-both">
										<h2 class="slider-content-title" data-swiper-parallax="-100">
											<?php if(empty($header_name)) { ?>
												<span class="c-primary">Utah</span>
											<?php } else { ?>
												<span class="c-primary"><?php echo $header_name; ?> </span>
											<?php } ?>

											
											<?php if (empty($header_content_two)) { ?>
												is quality product that will make your life better
											<?php } else {
												echo $header_content_two;
											} ?>

										</h2>

										<?php if(empty($header_description_two)) { ?>
											<h6 class="slider-content-text" data-swiper-parallax="-200">Lorem ipsum dolor sit amet,
												consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
												magna aliquam erat volutpat.
											</h6>
										<?php } else { ?>
											<h6 class="slider-content-text" data-swiper-parallax="-200"><?php echo $header_description_two;?> </h6>
										<?php } ?>
 										
										

										<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

											<a href="<?php echo $first_button_link; ?>"   class="btn btn-market btn--with-shadow">

												<?php if(empty($first_header_button_icon)) { ?>
													<svg class="utouch-icon utouch-icon-apple-logotype-1"><use xlink:href="#utouch-icon-apple-logotype-1"></use></svg>
												<?php } else { ?>
													<img class="utouch-icon" src="<?php echo $first_header_button_icon['url']; ?>" alt="<?php echo $first_header_button_icon['alt']; ?>">
												<?php } ?>
												
												<div class="text">
													<?php if (empty($first_header_button_small)) { ?>
														<span class="sup-title">Download on the</span>
													<?php } else { ?>
														<span class="sup-title"><?php echo $first_header_button_small; ?></span>
													<?php } ?>

													<?php if (empty($first_header_button_big)) { ?>
														<span class="title">App Store</span>
													<?php } else { ?>
														<span class="title"><?php echo $first_header_button_big; ?></span>
													<?php } ?>
												</div>
											</a>

											<a href="<?php echo $second_button_link_two; ?>"   class="btn btn-market btn--with-shadow">

												<?php if(empty($second_header_button_icon)) { ?>
													<img class="utouch-icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/svg-icons/google-play.svg" alt="google">
												<?php } else { ?>
													<img class="utouch-icon" src="<?php echo $second_header_button_icon['url']; ?>" alt="<?php echo $second_header_button_icon['alt']; ?>">
												<?php } ?>
												
												<div class="text">
													<?php if (empty($second_header_button_small)) { ?>
														<span class="sup-title">Download on the</span>
													<?php } else { ?>
														<span class="sup-title"><?php echo $second_header_button_small; ?></span>
													<?php } ?>

													<?php if (empty($second_header_button_big)) { ?>
														<span class="title">Google Play</span>
													<?php } else { ?>
														<span class="title"><?php echo $second_header_button_big; ?></span>
													<?php } ?>
													
												</div>
											</a>

										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="swiper-slide thumb-left bg-3 main-slider-bg-light">

						<div class="container table full-height">
							<div class="row table-cell">
								<div class="col-lg-6 col-sm-12 table-cell">

									<div class="slider-content align-both">

										<?php if (empty($header_content_three)) { ?>
											<h2 class="slider-content-title" data-swiper-parallax="-100">Rise Up With the Most Interesting App</h2>
										<?php } else { ?>
											<h2 class="slider-content-title" data-swiper-parallax="-100"><?php echo $header_content_three; ?></h2>
										<?php } ?>

										<?php if (empty($header_description_three)) { ?>
											<h6 class="slider-content-text" data-swiper-parallax="-200">Lorem ipsum dolor sit amet,
												consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
												dolore magna aliquam erat volutpat.
											</h6>

										<?php } else { ?>
											<h6 class="slider-content-text" data-swiper-parallax="-200"><?php echo $header_description_three; ?></h6>
										<?php } ?>
										
										

										<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

											<a href="02_company.html" class="btn btn--lime btn--with-shadow">
												<?php if (empty($header_button_text_three)) { ?>
													Get Started Now
												<?php } else {
													echo $header_button_text_three;
												}?>
												
											</a>

										</div>

									</div>

								</div>

								<div class="col-lg-6 col-sm-12 table-cell">
									<div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
										<?php if (!empty($header_image_three)) { ?>
											<img src="<?php echo $header_image_three['url']; ?>" alt="<?php echo $header_image_three['alt']; ?>">
										<?php } else { ?>
											<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/slides2.png" alt="slider">
										<?php } ?>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!--Prev next buttons-->

				<div class="btn-prev with-bg">
					<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
					<svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
				</div>

				<div class="btn-next with-bg">
					<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
					<svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
				</div>

			</div>
	</div

	<!-- ... end Main Slider -->