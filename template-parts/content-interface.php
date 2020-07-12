<?php
/*======== INTERFACE =========*/
/*======== Interface slide 1 =========*/
$interface_image_one = get_field('interface_image_one');
$interface_section_one = get_field('interface_section_one');
$interface_name_one = get_field('interface_name_one');
$interface_content_one = get_field('interface_content_one');

/*======== Interface Button slide 1 =========*/
$first_button_link_one = get_field('first_button_link_one');
$first_button_text_small_one = get_field('first_button_text_small_one');
$first_button_text_large_one = get_field('first_button_text_large_one');
$first_button_icon_one = get_field('first_button_icon_one');
$second_button_link_one = get_field('second_button_link_one');
$second_button_icon_one = get_field('second_button_icon_one');
$second_button_text_small_one = get_field('second_button_text_small_one');
$second_button_text_large_one = get_field('second_button_text_large_one');

/*======== Interface slide 2 =========*/
$interface_image_two = get_field('interface_image_two');
$interface_section_two = get_field('interface_section_two');
$interface_name_two = get_field('interface_name_two');
$interface_content_two = get_field('interface_content_two');

/*======== Interface Button slide 2 =========*/
$first_button_link_two = get_field('first_button_link_two');
$first_button_text_small_two = get_field('first_button_text_small_two');
$first_button_text_large_two = get_field('first_button_text_large_two');
$first_button_icon_two = get_field('first_button_icon_two');
$second_button_link_two = get_field('second_button_link_two');
$second_button_icon_two = get_field('second_button_icon_two');
$second_button_text_small_two = get_field('second_button_text_small_two');
$second_button_text_large_two = get_field('second_button_text_large_two');

/*======== Interface slide 3 =========*/
$interface_image_three = get_field('interface_image_three');
$interface_section_three = get_field('interface_section_three');
$interface_name_three = get_field('interface_name_three');
$interface_content_three = get_field('interface_content_three');

/*======== Interface Button slide 3 =========*/
$first_button_link_three = get_field('first_button_link_three');
$first_button_text_small_three = get_field('first_button_text_small_three');
$first_button_text_large_three = get_field('first_button_text_large_three');
$first_button_icon_three = get_field('first_button_icon_three');
$second_button_link_three = get_field('second_button_link_three');
$second_button_icon_three = get_field('second_button_icon_three');
$second_button_text_small_three = get_field('second_button_text_small_three');
$second_button_text_large_three = get_field('second_button_text_large_three');
?>

<!-- Slider with vertical tabs -->

	<section class="crumina-module crumina-module-slider slider-tabs-vertical-line">

			<div class="swiper-container" data-show-items="1">
				<div class="swiper-wrapper">
					<div class="swiper-slide bg-primary-color bg-5" data-mh="slide">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
									<div class="slider-tabs-vertical-thumb">
										<?php if (!empty($interface_image_one)) { ?>
											<img src="<?php echo $interface_image_three['url']; ?>" alt="<?php echo $interface_image_three['alt']; ?>">
										<?php } else { ?>
											<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/iphone.png" alt="iphone">
										<?php } ?>
									</div>
								</div>
								<div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
									<div class="crumina-module crumina-heading custom-color c-white">
										<?php if (empty($interface_section_one)) { ?>
											<h6 class="heading-sup-title">User Interface</h6>
										<?php } else { ?>
											<h6 class="heading-sup-title"><?php echo $interface_section_one; ?></h6>
										<?php } ?>

										<?php if (empty($interface_name_one)) { ?>
											<h2 class="heading-title">Discover new horisons</h2>
										<?php } else { ?>
											<h2 class="heading-title"><?php echo $interface_name_one; ?></h2>
										<?php } ?>

										<?php if (empty($interface_content_one)) { ?>
											<div class="heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
												diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
												Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
												Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
												litterarum formas humanitatis per.
											</div>
										<?php } else { ?>
											<div class="heading-text"><?php echo $interface_content_one; ?></div>
										<?php } ?>
									
									</div>

									<a href="<?php if (empty($first_button_link_one)) { ?> "#" <?php } else { echo $first_button_link_one; } ?>"   class="btn btn-market btn--with-shadow">

										<?php if (empty($first_button_icon_one)) { ?>
											<svg class="utouch-icon utouch-icon-apple-logotype-1"><use xlink:href="#utouch-icon-apple-logotype-1"></use></svg>
										<?php } else { ?>
											<img class="utouch-icon" src="<?php echo $first_button_icon_one['url']; ?>" alt="<?php echo $first_button_icon_one['alt']; ?>">
										<?php } ?>
										
										<div class="text">
											<?php if (empty($first_button_text_small_one)) { ?>
												<span class="sup-title">Download on the</span>
											<?php } else { ?>
												<span class="sup-title"><?php echo $first_button_text_small_one; ?></span>
											<?php } ?>
											
											<?php if (empty($first_button_text_large_one)) { ?>
												<span class="title">App Store</span>
											<?php } else { ?>
												<span class="title"><?php echo $first_button_text_large_one; ?></span>
											<?php } ?>
											
										</div>
									</a>

									<a href="<?php if(empty($second_button_link_one)) { ?> "#" <?php } else { echo $second_button_link_one; } ?>"   class="btn btn-market btn--with-shadow">

										<?php if (empty($second_button_icon_one)) { ?>
											<img class="utouch-icon" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/svg-icons/google-play.svg" alt="google">
										<?php } else { ?>
											<img class="utouch-icon" src="<?php echo $second_button_icon_one['url']; ?>" alt="<?php echo $second_button_icon_one['alt']; ?>">
										<?php } ?>
										
										<div class="text">
											<?php if (empty($second_button_text_small_one)) { ?>
												<span class="sup-title">Download on the</span>
											<?php } else { ?>
												<span class="sup-title"><?php echo $second_button_text_small_one; ?></span>
											<?php } ?>

											<?php if (empty($second_button_text_large_one)) { ?>
												<span class="title">Google Play</span>
											<?php } else { ?>
												<span class="title"><?php echo $second_button_text_large_one; ?></span>
											<?php } ?>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide bg-orange-light bg-6" data-mh="slide">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
									<div class="slider-tabs-vertical-thumb">
										<?php if (!empty($interface_image_two)) { ?>

											<img src="<?php echo $interface_image_two['url']; ?>" alt="<?php echo $interface_image_two['alt']; ?>">

										<?php } else { ?>
											<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/iphone2.png" alt="iphone">
										<?php } ?>
									</div>
								</div>
								<div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
									<div class="crumina-module crumina-heading custom-color c-white">
										<?php if (empty($interface_section_two)) { ?>
											<h6 class="heading-sup-title">User Interface</h6>
										<?php } else { ?>
											<h6 class="heading-sup-title"><?php echo $interface_section_two; ?></h6>
										<?php } ?>

										<?php if (empty($interface_name_two)) { ?>
											<h2 class="heading-title">Discover new horisons</h2>
										<?php } else { ?>
											<h2 class="heading-title"><?php echo $interface_name_two; ?></h2>
										<?php } ?>

										<?php if (empty($interface_content_two)) { ?>
											<div class="heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
												diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
												Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
												Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
												litterarum formas humanitatis per.
											</div>
										<?php } else { ?>
											<div class="heading-text"><?php echo $interface_content_two; ?></div>
										<?php } ?>
									</div>

									<a href="<?php if (empty($first_button_link_two)) { ?> "#" <?php } else { echo $first_button_link_two; } ?>"   class="btn btn-market btn--with-shadow">

										<?php if (empty($first_button_icon_two)) { ?>
											<svg class="utouch-icon utouch-icon-apple-logotype-1"><use xlink:href="#utouch-icon-apple-logotype-1"></use></svg>
										<?php } else { ?>
											<img class="utouch-icon" src="<?php echo $first_button_icon_two['url']; ?>" alt="<?php echo $first_button_icon_two['alt']; ?>">
										<?php } ?>
										
										<div class="text">
											<?php if (empty($first_button_text_small_two)) { ?>
												<span class="sup-title">Download on the</span>
											<?php } else { ?>
												<span class="sup-title"><?php echo $first_button_text_small_two; ?></span>
											<?php } ?>
											
											<?php if (empty($first_button_text_large_two)) { ?>
												<span class="title">App Store</span>
											<?php } else { ?>
												<span class="title"><?php echo $first_button_text_large_two; ?></span>
											<?php } ?>
											
										</div>
									</a>

									<a href="<?php if(empty($second_button_link_two)) { ?> "#" <?php } else { echo $second_button_link_two; } ?>"   class="btn btn-market btn--with-shadow">

										<?php if (empty($second_button_icon_two)) { ?>
											<img class="utouch-icon" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/svg-icons/google-play.svg" alt="google">
										<?php } else { ?>
											<img class="utouch-icon" src="<?php echo $second_button_icon_two['url']; ?>" alt="<?php echo $second_button_icon_two['alt']; ?>">
										<?php } ?>
										
										<div class="text">
											<?php if (empty($second_button_text_small_two)) { ?>
												<span class="sup-title">Download on the</span>
											<?php } else { ?>
												<span class="sup-title"><?php echo $second_button_text_small_two; ?></span>
											<?php } ?>

											<?php if (empty($second_button_text_large_two)) { ?>
												<span class="title">Google Play</span>
											<?php } else { ?>
												<span class="title"><?php echo $second_button_text_large_two; ?></span>
											<?php } ?>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide bg-red bg-7" data-mh="slide">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
									<div class="slider-tabs-vertical-thumb">
		
										<?php if (!empty($interface_image_three)) { ?>
											<img src="<?php echo $interface_image_three['url']; ?>" alt="<?php echo $interface_image_three['alt']; ?>">
										<?php } else { ?>
											<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/iphone3.png" alt="iphone">
										<?php } ?>
									</div>
								</div>
								<div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
									<div class="crumina-module crumina-heading custom-color c-white">
										<?php if (empty($interface_section_three)) { ?>
											<h6 class="heading-sup-title">User Interface</h6>
										<?php } else { ?>
											<h6 class="heading-sup-title"><?php echo $interface_section_three; ?></h6>
										<?php } ?>

										<?php if (empty($interface_name_three)) { ?>
											<h2 class="heading-title">Discover new horisons</h2>
										<?php } else { ?>
											<h2 class="heading-title"><?php echo $interface_name_three; ?></h2>
										<?php } ?>

										<?php if (empty($interface_content_three)) { ?>
											<div class="heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
											diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
											Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
											Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
											litterarum formas humanitatis per.</div>
										<?php } else { ?>
											<div class="heading-text"><?php echo $interface_content_three; ?></div>
										<?php } ?>
										

										
										<div class="heading-text"><?php echo $interface_content_three; ?></div>
									</div>

									<a href="<?php if (empty($first_button_link_three)) { ?> "#" <?php } else { echo $first_button_link_three; } ?>"   class="btn btn-market btn--with-shadow">

										<?php if (empty($first_button_icon_three)) { ?>
											<svg class="utouch-icon utouch-icon-apple-logotype-1"><use xlink:href="#utouch-icon-apple-logotype-1"></use></svg>
										<?php } else { ?>
											<img class="utouch-icon" src="<?php echo $first_button_icon_three['url']; ?>" alt="<?php echo $first_button_icon_three['alt']; ?>">
										<?php } ?>
										
										<div class="text">
											<?php if (empty($first_button_text_small_three)) { ?>
												<span class="sup-title">Download on the</span>
											<?php } else { ?>
												<span class="sup-title"><?php echo $first_button_text_small_three; ?></span>
											<?php } ?>
											
											<?php if (empty($first_button_text_large_three)) { ?>
												<span class="title">App Store</span>
											<?php } else { ?>
												<span class="title"><?php echo $first_button_text_large_three; ?></span>
											<?php } ?>
											
										</div>
									</a>

									<a href="<?php if(empty($second_button_link_three)) { ?> "#" <?php } else { echo $second_button_link_three; } ?>"   class="btn btn-market btn--with-shadow">

										<?php if (empty($second_button_icon_three)) { ?>
											<img class="utouch-icon" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/svg-icons/google-play.svg" alt="google">
										<?php } else { ?>
											<img class="utouch-icon" src="<?php echo $second_button_icon_three['url']; ?>" alt="<?php echo $second_button_icon_three['alt']; ?>">
										<?php } ?>
										
										<div class="text">
											<?php if (empty($second_button_text_small_three)) { ?>
												<span class="sup-title">Download on the</span>
											<?php } else { ?>
												<span class="sup-title"><?php echo $second_button_text_small_three; ?></span>
											<?php } ?>

											<?php if (empty($second_button_text_large_three)) { ?>
												<span class="title">Google Play</span>
											<?php } else { ?>
												<span class="title"><?php echo $second_button_text_large_three; ?></span>
											<?php } ?>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				

				<div class="slider-slides slider-slides--vertical-line">
					<a href="#" class="slides-item">
						<span class="round primary"></span>01.
					</a>

					<a href="#" class="slides-item">
						<span class="round orange"></span>02.
					</a>

					<a href="#" class="slides-item">
						<span class="round red"></span>03.
					</a>

				</div>

			

	</section>

	<!-- ... Slider with vertical tabs -->