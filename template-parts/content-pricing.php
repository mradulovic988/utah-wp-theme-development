<?php
/*======== PRICING PLAN =========*/
/*======== Plan Section Content =========*/
$plan_section_title = get_field('plan_section_title');
$plan_section_description = get_field('plan_section_description');

/*======== Pricing Plan 1 =========*/
$price_plan_name_one = get_field('price_plan_name_one');
$plan_name_one = get_field('plan_name_one');
$first_description_one = get_field('first_description_one');
$plan_content_one = get_field('plan_content_one');
$second_description_one = get_field('second_description_one');
$value_one = get_field('value_one');
$currency_price_one = get_field('currency_price_one');

/*======== Pricing Plan 2 =========*/
$price_plan_name_two = get_field('price_plan_name_two');
$plan_name_two = get_field('plan_name_two');
$first_description_two = get_field('first_description_two');
$plan_content_two = get_field('plan_content_two');
$second_description_two = get_field('second_description_two');
$value_two = get_field('value_two');
$currency_price_two = get_field('currency_price_two');

/*======== Pricing Plan 3 =========*/
$price_plan_name_third = get_field('price_plan_name_third');
$plan_name_third = get_field('plan_name_third');
$first_description_third = get_field('first_description_third');
$plan_content_third = get_field('plan_content_third');
$second_description_third = get_field('second_description_third');
$value_third = get_field('value_third');
$currency_price_third = get_field('currency_price_third');
?>

<!-- Pricing Tables -->

	<section class="background-contain bg-13 medium-padding100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0 col-xs-12 mb60">
						<div class="crumina-module crumina-heading align-center">
							<?php if (empty($plan_section_title)) : ?>
								<h6 class="heading-sup-title">Our Pricing Plans</h6>
							<?php else : ?>
								<h6 class="heading-sup-title"><?php echo $plan_section_title; ?></h6>
							<?php endif; ?>
							
							<?php if (empty($plan_section_description)) : ?>
								<h2 class="heading-title">Choose the product that you really need!</h2>
							<?php else : ?>
								<h2 class="heading-title"><?php echo $plan_section_description; ?></h2>
							<?php endif; ?>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="pricing-wrap">
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="crumina-module crumina-pricing-tables-item pricing-tables-item-standard">
								<div class="main-pricing-content">
									<h2 class="h1 rate">
										<?php if (empty($value_one)) : ?>
											$
										<?php else : ?>
											<?php echo $value_one; ?>
										<?php endif; ?>
										<span class="price">
											<?php if (empty($currency_price_one)) : ?>
												0
											<?php else : ?>
												<?php echo $currency_price_one; ?>
											<?php endif; ?>
										</span></h2>

										<?php if (empty($price_plan_name_one)) : ?>
											<h5 class="pricing-title">Freebie Plan</h5>
										<?php else : ?>
											<h5 class="pricing-title"><?php echo $price_plan_name_one; ?></h5>
										<?php endif; ?>
									

									<div class="pricing-line bg-green"></div>

									<?php if (empty($first_description_one)) : ?>
										<p class="pricing-description">Mirum est notare quam littera gothica, quam nunc putamus parum.</p>
									<?php else : ?>
										<p class="pricing-description"><?php echo $first_description_one; ?></p>
									<?php endif; ?>

									<ul class="pricing-tables-position">
										<li class="position-item">
											<?php echo $plan_content_one; ?>
										</li>
									</ul>

									<?php if (empty($second_description_one)) : ?>
										<p class="sub-description">Ut wisi enim ad minim veniam, nostrud ullamcorper.</p>
									<?php else : ?>
										<p class="sub-description"><?php echo $second_description_one; ?></p>
									<?php endif; ?>

								</div>

								<div class="bg-pricing-content bg-green">
									<?php if (empty($plan_name_one)) : ?>
										<a href="15_pricing_tables.html" class="h6 title">Get trial version</a>
									<?php else : ?>
										<a href="15_pricing_tables.html" class="h6 title"><?php echo $plan_name_one; ?></a>
									<?php endif; ?>

									
								</div>

							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="crumina-module crumina-pricing-tables-item pricing-tables-item-standard main-plan">
								<div class="main-pricing-content">
									<h2 class="h1 rate">
										<?php if (empty($value_two)) : ?>
											$
										<?php else : ?>
											<?php echo $value_two; ?>
										<?php endif; ?>
										<span class="price">
											<?php if (empty($currency_price_two)) : ?>
												49
											<?php else : ?>
												<?php echo $currency_price_two; ?>
											<?php endif; ?>
										</span></h2>

										<?php if (empty($price_plan_name_two)) : ?>
											<h5 class="pricing-title">Premium Plan</h5>
										<?php else : ?>
											<h5 class="pricing-title"><?php echo $price_plan_name_two; ?></h5>
										<?php endif; ?>
									

									<div class="pricing-line bg-pamaranch"></div>

									<?php if (empty($first_description_two)) : ?>
										<p class="pricing-description">Mirum est notare quam littera gothica, quam nunc putamus parum.</p>
									<?php else : ?>
										<p class="pricing-description"><?php echo $first_description_two; ?></p>
									<?php endif; ?>

									<ul class="pricing-tables-position">
										<?php if (empty($plan_content_two)) : ?>
											<li class="position-item">
												Unlimited Free Update
											</li>
											<li class="position-item">
												Unlimited Disk Dreator
											</li>
											<li class="position-item">
												Unlimited User Support
											</li>
											<li class="position-item">
												Money Transfer System
											</li>
											<li class="position-item">
												Unlimited Support
											</li>
										<?php else : ?>
											<li class="position-item">
												<?php echo $plan_content_two; ?>
											</li>
										<?php endif; ?>
									</ul>

									<?php if (empty($second_description_two)) : ?>
										<p class="sub-description">Ut wisi enim ad minim veniam, nostrud ullamcorper.</p>
									<?php else : ?>
										<p class="sub-description"><?php echo $second_description_two; ?></p>
									<?php endif; ?>

								</div>

								<div class="bg-pricing-content bg-pamaranch">
									<?php if (empty($plan_name_two)) : ?>
										<a href="15_pricing_tables.html" class="h6 title">Become a member</a>
									<?php else : ?>
										<a href="15_pricing_tables.html" class="h6 title"><?php echo $plan_name_two; ?></a>
									<?php endif; ?>

									
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="crumina-module crumina-pricing-tables-item pricing-tables-item-standard">
								<div class="main-pricing-content">
									<h2 class="h1 rate">
										<?php if (empty($value_third)) : ?>
											$
										<?php else : ?>
											<?php echo $value_third; ?>
										<?php endif; ?>
										<span class="price">
											<?php if (empty($currency_price_third)) : ?>
												29
											<?php else : ?>
												<?php echo $currency_price_third; ?>
											<?php endif; ?>
										</span></h2>

										<?php if (empty($price_plan_name_third)) : ?>
											<h5 class="pricing-title">Bussines Plan</h5>
										<?php else : ?>
											<h5 class="pricing-title"><?php echo $price_plan_name_third; ?></h5>
										<?php endif; ?>
									

									<div class="pricing-line bg-red"></div>

									<?php if (empty($first_description_third)) : ?>
										<p class="pricing-description">Mirum est notare quam littera gothica, quam nunc putamus parum.</p>
									<?php else : ?>
										<p class="pricing-description"><?php echo $first_description_third; ?></p>
									<?php endif; ?>

									<ul class="pricing-tables-position">
										<?php if (empty($plan_content_third)) : ?>
											<li class="position-item">
												Unlimited Free Update
											</li>
											<li class="position-item">
												Unlimited Disk Dreator
											</li>
											<li class="position-item">
												Unlimited Support
											</li>
										<?php else : ?>
											<li class="position-item">
												<?php echo $plan_content_third; ?>
											</li>
										<?php endif; ?>
									</ul>

									<?php if (empty($second_description_third)) : ?>
										<p class="sub-description">Ut wisi enim ad minim veniam, nostrud ullamcorper.</p>
									<?php else : ?>
										<p class="sub-description"><?php echo $second_description_third; ?></p>
									<?php endif; ?>

								</div>

								<div class="bg-pricing-content bg-red">
									<?php if (empty($plan_name_third)) : ?>
										<a href="15_pricing_tables.html" class="h6 title">Buy it now!</a>
									<?php else : ?>
										<a href="15_pricing_tables.html" class="h6 title"><?php echo $plan_name_third; ?></a>
									<?php endif; ?>

									
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<!-- ... end Pricing Tables -->