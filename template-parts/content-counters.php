<?php
/*======== COUNTERS =========*/
/*======== Counter 1 =========*/
$counters_from_one = get_field('counters_from_one');
$counters_to_one = get_field('counters_to_one');
$front_end_counter_one = get_field('front_end_counter_one');
$counter_text_one = get_field('counter_text_one');

/*======== Counter 2 =========*/
$counters_from_two = get_field('counters_from_two');
$counters_to_two = get_field('counters_to_two');
$front_end_counter_two = get_field('front_end_counter_two');
$counter_text_two = get_field('counter_text_two');

/*======== Counter 3 =========*/
$counters_from_three = get_field('counters_from_three');
$counters_to_three = get_field('counters_to_three');
$front_end_counter_three = get_field('front_end_counter_three');
$counter_text_three = get_field('counter_text_three');

/*======== Counter 4 =========*/
$counters_from_four = get_field('counters_from_four');
$counters_to_four = get_field('counters_to_four');
$front_end_counter_four = get_field('front_end_counter_four');
$counter_text_four = get_field('counter_text_four');

/*======== Side text =========*/
$side_text_title = get_field('side_text_title');
$side_text_content = get_field('side_text_content');
?>
<!-- Counters -->

	<section class="bg-secondary-color background-contain bg-10">

			<div class="container">
				<div class="row">
					<div class="counters">
						<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
							<div class="crumina-module crumina-counter-item">
								<div class="counter-numbers counter c-yellow">
									<span data-speed="1" data-refresh-interval="3" data-to="
										<?php if (empty($counters_to_one)) { ?>
											16000
										<?php } else {
											echo $counters_to_one;
										} ?>
									" data-from="<?php if (empty($counters_from_one)) { ?>
											1000
										<?php } else {
											echo $counters_from_one;
										} ?>">
									<?php if (empty($front_end_counter_one)) { ?>
										16000
									<?php } else {
										echo $front_end_counter_one;
									} ?></span>
								</div>
								<?php if (empty($counter_text_one)) { ?>
									<h5 class="counter-title">Line of codes</h5>
								<?php } else { ?>
									<h5 class="counter-title"><?php echo $counter_text_one; ?></h5>
								<?php } ?>

								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
							<div class="crumina-module crumina-counter-item">
								<div class="counter-numbers counter c-yellow">
									<span data-speed="1" data-refresh-interval="3" data-to="
										<?php if (empty($counters_to_two)) { ?>
											4000
										<?php } else {
											echo $counters_to_two;
										} ?>
									" data-from="<?php if (empty($counters_from_two)) { ?>
											2000
										<?php } else {
											echo $counters_from_two;
										} ?>">
										<?php if (empty($front_end_counter_two)) { ?>
										4000
									<?php } else {
										echo $front_end_counter_two;
									} ?>
									</span>
								</div>
								<?php if (empty($counter_text_two)) { ?>
									<h5 class="counter-title">Solutions</h5>
								<?php } else { ?>
									<h5 class="counter-title"><?php echo $counter_text_two; ?></h5>
								<?php } ?>
								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
							<div class="crumina-module crumina-counter-item">
								<div class="counter-numbers counter c-yellow">
									<span data-speed="1" data-refresh-interval="3" data-to="
										<?php if (empty($counters_to_three)) { ?>
											3
										<?php } else {
											echo $counters_to_three;
										} ?>
									" data-from="<?php if (empty($counters_from_three)) { ?>
											2000
										<?php } else {
											echo $counters_from_three;
										} ?>">
										<?php if (empty($front_end_counter_three)) { ?>
										3000+
									<?php } else {
										echo $front_end_counter_three;
									} ?>
									</span>
								</div>
								<?php if (empty($counter_text_three)) { ?>
									<h5 class="counter-title">Active users</h5>
								<?php } else { ?>
									<h5 class="counter-title"><?php echo $counter_text_three; ?></h5>
								<?php } ?>
								</div>
							</div>
						<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
							<div class="crumina-module crumina-counter-item">
								<div class="counter-numbers counter c-yellow">
									<span data-speed="1" data-refresh-interval="3" data-to="
										<?php if (empty($counters_to_four)) { ?>
											8
										<?php } else {
											echo $counters_to_three;
										} ?>
									" data-from="<?php if (empty($counters_from_four)) { ?>
											2000
										<?php } else {
											echo $counters_from_four;
										} ?>">
										<?php if (empty($front_end_counter_four)) { ?>
										2000+
									<?php } else {
										echo $front_end_counter_four;
									} ?>
									</span>
								</div>
								<?php if (empty($counter_text_four)) { ?>
									<h5 class="counter-title">Download</h5>
								<?php } else { ?>
									<h5 class="counter-title"><?php echo $counter_text_four; ?></h5>
								<?php } ?>
							</div>
						</div>

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<?php if (empty($side_text_title)) { ?>
								<h5 class="c-white">Utah is an awesome app</h5>
							<?php } else { ?>
								<h5 class="c-white"><?php echo $side_text_title; ?></h5>
							<?php } ?>

							<?php if (empty($side_text_content)) { ?>
								<p class="c-semitransparent-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy euismod.</p>
							<?php } else { ?>
								<p class="c-semitransparent-white"><?php echo $side_text_content; ?></p>
							<?php } ?>
						</div>
					</div>

				</div>
			</div>
					

	</section>

	<!-- ... end  Counters -->