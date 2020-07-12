<?php
/*======== SUBSCRIBE =========*/
$subscribe_content = get_field('subscribe_content');
$subscribe_description = get_field('subscribe_description');
$placeholder_text = get_field('placeholder_text');
$subscribe_button = get_field('subscribe_button');
?>
<!-- Subscribe Form -->

	<section class="bg-primary-color background-contain bg-14 crumina-module crumina-module-subscribe-form">
			<div class="container">
				<div class="row">
					<div class="subscribe-form">
						<div class="subscribe-main-content">
							<img class="subscribe-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/subscribe-img.png" alt="image">

							<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-heading">
									<?php if (empty($subscribe_content)) : ?>
										<h2 class="heading-title">Love offers and discounts? Subscribe and save.</h2>
									<?php else : ?>
										<h2 class="heading-title"><?php echo $subscribe_content; ?></h2>
									<?php endif; ?>
									
									<?php if (empty($subscribe_description)) : ?>
										<p class="heading-text">Claritas est etiam processus dynamicus, qui sequitur mutationem
											consuetudium lectorum putamus claram.
										</p>
									<?php else : ?>
										<p class="heading-text"><?php echo $subscribe_description; ?></p>
									<?php endif; ?>
								</div>

								<form class="form-inline subscribe-form-js" method="post" action="import.php">
									<input name="email" placeholder="<?php if(empty($placeholder_text)) : ?>Enter your email address<?php else : echo $placeholder_text; endif; ?>" type="email">
									<button class="btn btn--green-light">
										<?php if (empty($subscribe_button)) : ?>
											Subscribe
										<?php else : 
											echo $subscribe_button; 
										endif; ?>
									</button>
								</form>
							</div>

						</div>
						<div class="subscribe-layer"></div>
					</div>
				</div>
			</div>
	</section>

	<!-- End Subscribe Form -->