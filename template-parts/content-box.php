<?php
/*======== INFO BOXES =========*/
/*======== First left tab =========*/
$first_left_content = get_field('first_left_content');
$first_left_description = get_field('first_left_description');
$first_left_icon = get_field('first_left_icon');

/*======== Second left tab =========*/
$second_left_content = get_field('second_left_content');
$second_left_description = get_field('second_left_description');
$second_left_icon = get_field('second_left_icon');

/*======== First right tab =========*/
$first_right_content = get_field('first_right_content');
$first_right_description = get_field('first_right_description');
$first_right_icon = get_field('first_right_icon');

/*======== Second right tab =========*/
$second_right_content = get_field('second_right_content');
$second_right_description = get_field('second_right_description');
$second_right_icon = get_field('second_right_icon');

/*======== Lead Info Image =========*/
$info_image = get_field('info_image');

/*======== Info button =========*/
$name_button = get_field('name_button');
$name_button_link = get_field('name_button_link');
?>
<!-- Info Boxes -->
	
<!-- Info Boxes -->

	<section class="bg-9 background-contain medium-padding120">
			<div class="container">
				<div class="row">
					<div class="display-flex info-boxes">
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="crumina-module crumina-info-box info-box--standard-round icon-right negative-margin-right150">
								<div class="info-box-image">

									<?php if (empty($first_left_icon)) { ?>
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/svg-icons/chat.svg" alt="chat" class="utouch-icon">
									<?php } else { ?>
										<img src="<?php echo $first_left_icon['url']; ?>" alt="<?php echo $first_left_icon['alt']; ?>" class="utouch-icon">
									<?php } ?>
									
								</div>
								<div class="info-box-content">

									<?php if (empty($first_left_content)) { ?>
										<h5 class="info-box-title">Private Chat Integration</h5>
									<?php } else { ?>
										<h5 class="info-box-title"><?php echo $first_left_content; ?></h5>
									<?php } ?>

									<?php if (empty($first_left_description)) { ?>
										<p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
											tincidunt.
										</p>
									<?php } else { ?>
										<p class="info-box-text"><?php echo $first_left_description; ?></p>
									<?php } ?>
								</div>
							</div>

							<div class="crumina-module crumina-info-box info-box--standard-round icon-right negative-margin-right150">
								<div class="info-box-image">

									<?php if (empty($second_left_icon)) { ?>
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/svg-icons/pictures.svg" alt="chat" class="utouch-icon">
									<?php } else { ?>
										<img src="<?php echo $second_left_icon['url']; ?>" alt="<?php echo $second_left_icon['alt']; ?>" class="utouch-icon">
									<?php } ?>

									
								</div>
								<div class="info-box-content">
									<?php if (empty($first_left_content)) { ?>
										<h5 class="info-box-title">Perfect Grafic View</h5>
									<?php } else { ?>
										<h5 class="info-box-title"><?php echo $second_left_content; ?></h5>
									<?php } ?>

									<?php if (empty($first_left_description)) { ?>
										<p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
											nonummy nibh euismod.
										</p>
									<?php } else { ?>
										<p class="info-box-text"><?php echo $second_left_description; ?></p>
									<?php } ?>
									
									
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 align-center">

							<?php if (empty($info_image)) { ?>
								<img class="particular-image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/image.png" alt="image">
							<?php } else { ?>
								<img class="particular-image" src="<?php echo $info_image['url']; ?>" alt="<?php echo $info_image['alt']; ?>">
							<?php } ?>
							
							<a href="<?php if (empty($name_button_link)) { ?> 03_products.html <?php } else {echo $name_button_link; } ?>" class="btn btn--red btn--with-shadow">
								<?php if (empty($name_button)) { ?>
									Learn More
								<?php } else {
									echo $name_button;
								} ?>
								
							</a>
						</div>

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="crumina-module crumina-info-box info-box--standard-round negative-margin-left150">
								<div class="info-box-image">

									<?php if (empty($first_right_icon)) { ?>
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/svg-icons/clock.svg" alt="chat" class="utouch-icon">
									<?php } else { ?>
										<img src="<?php echo $first_right_icon['url']; ?>" alt="<?php echo $first_right_icon['alt']; ?>" class="utouch-icon">
									<?php } ?>

									
								</div>
								<div class="info-box-content">
									<?php if (empty($first_right_icon)) { ?>
										<h5 class="info-box-title">Lifetime Updates</h5>
									<?php } else { ?>
										<h5 class="info-box-title"><?php echo $first_right_content; ?></h5>
									<?php } ?>

									<?php if (empty($first_right_description)) { ?>
										<p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
										tincidunt.
									</p>
									<?php } else { ?>
										<p class="info-box-text"><?php echo $first_right_description; ?></p>
									<?php } ?>
								</div>
							</div>

							<div class="crumina-module crumina-info-box info-box--standard-round negative-margin-left150">
								<div class="info-box-image">

									<?php if (empty($second_right_icon)) { ?>
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/svg-icons/calendar.svg" alt="chat" class="utouch-icon">
									<?php } else { ?>
										<img src="<?php echo $second_right_icon['url']; ?>" alt="<?php echo $second_right_icon['alt']; ?>" class="utouch-icon">
									<?php } ?>

									
								</div>
								<div class="info-box-content">
									<?php if (empty($second_right_icon)) { ?>
										<h5 class="info-box-title">Calendar Sinhronize</h5>
									<?php } else { ?>
										<h5 class="info-box-title"><?php echo $second_right_content; ?></h5>
									<?php } ?>

									<?php if (empty($second_right_description)) { ?>
										<p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
											nonummy euismod.
										</p>
									<?php } else { ?>
										<p class="info-box-text"><?php echo $second_right_description; ?></p>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<!-- ... Info Boxes -->