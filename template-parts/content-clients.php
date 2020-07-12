<?php
/*======== CLIENTS SECTION =========*/
$link_one = get_field('link_one');
$white_image_one = get_field('white_image_one');
$black_image_one = get_field('black_image_one');
$link_two = get_field('link_two');
$white_image_two = get_field('white_image_two');
$black_image_two = get_field('black_image_two');
$link_three = get_field('link_three');
$white_image_three = get_field('white_image_three');
$black_image_three = get_field('black_image_three');
$link_four = get_field('link_four');
$white_image_four = get_field('white_image_four');
$black_image_four = get_field('black_image_four');
$link_five = get_field('link_five');
$white_image_five = get_field('white_image_five');
$black_image_five = get_field('black_image_five');
$link_six = get_field('link_six');
$white_image_six = get_field('white_image_six');
$black_image_six = get_field('black_image_six');
?>
<!-- Clients Block -->

	<section class="crumina-module crumina-clients background-contain bg-yellow">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<a class="clients-item" href="<?php echo $link_one; ?>">
							<span class="clients-images">

								<?php if ($white_image_one == $black_image_one) { ?>
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/client1.png" class="" alt="logo">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/client1-1.png" class="hover" alt="logo">
								<?php } else { ?>
									<img src="<?php echo $white_image_one['url']; ?>" class="" alt="<?php echo $white_image_one['alt']; ?>">
									<img src="<?php echo $black_image_one['url']; ?>" class="hover" alt="<?php echo $black_image_one['alt']; ?>">
								<?php } ?>
								
							</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<a class="clients-item" href="<?php echo $link_two; ?>">
							<span class="clients-images">

								<?php if ($white_image_two == $black_image_two) { ?>
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/client2.png" class="" alt="logo">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/client2-1.png" class="hover" alt="logo">
								<?php } else { ?>
									<img src="<?php echo $white_image_two['url']; ?>" class="" alt="<?php echo $white_image_two['alt']; ?>">
									<img src="<?php echo $black_image_two['url']; ?>" class="hover" alt="<?php echo $black_image_two['alt']; ?>">
								<?php } ?>

							</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<a class="clients-item" href="<?php echo $link_three; ?>">
							<span class="clients-images">

								<?php if ($white_image_three == $black_image_three) { ?>
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/client3.png" class="" alt="logo">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/client3-1.png" class="hover" alt="logo">
								<?php } else { ?>
									<img src="<?php echo $white_image_three['url']; ?>" class="" alt="<?php echo $white_image_three['alt']; ?>">
									<img src="<?php echo $black_image_three['url']; ?>" class="hover" alt="<?php echo $black_image_three['alt']; ?>">
								<?php } ?>
								
							</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<a class="clients-item" href="<?php echo $link_four; ?>">
							<span class="clients-images">

								<?php if ($white_image_four == $black_image_four) { ?>
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/client4.png" class="" alt="logo">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/client4-1.png" class="hover" alt="logo">
								<?php } else { ?>
									<img src="<?php echo $white_image_four['url']; ?>" class="" alt="<?php echo $white_image_four['alt']; ?>">
									<img src="<?php echo $black_image_four['url']; ?>" class="hover" alt="<?php echo $black_image_four['alt']; ?>">
								<?php } ?>

							</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<a class="clients-item" href="<?php echo $link_five; ?>">
							<span class="clients-images">

								<?php if ($white_image_five == $black_image_five) { ?>
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/client5.png" class="" alt="logo">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/client5-1.png" class="hover" alt="logo">
								<?php } else { ?>
									<img src="<?php echo $white_image_five['url']; ?>" class="" alt="<?php echo $white_image_five['alt']; ?>">
									<img src="<?php echo $black_image_five['url']; ?>" class="hover" alt="<?php echo $black_image_five['alt']; ?>">
								<?php } ?>

							</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<a class="clients-item" href="<?php echo $link_six; ?>">
							<span class="clients-images">

								<?php if ($white_image_six == $black_image_six) { ?>
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/client6.png" class="" alt="logo">
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/client6-1.png" class="hover" alt="logo">
								<?php } else { ?>
									<img src="<?php echo $white_image_six['url']; ?>" class="" alt="<?php echo $white_image_six['alt']; ?>">
									<img src="<?php echo $black_image_six['url']; ?>" class="hover" alt="<?php echo $black_image_six['alt']; ?>">
								<?php } ?>

							</span>
						</a>
					</div>
				</div>
			</div>
	</section>

	<!-- ... end Clients Block -->