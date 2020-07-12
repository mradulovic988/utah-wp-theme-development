<?php
/*
Template Name: Page About Us
*/

/* ======= HEADER ======= */
/* ======= Content ======= */
$heading_subtitle = get_field('heading_subtitle');
$heading_title = get_field('heading_title');
$blue_heading_title = get_field('blue_heading_title');
$heading_text = get_field('heading_text');

/* ======= Button Left ======= */
$button_one_text = get_field('button_one_text');
$button_one_link = get_field('button_one_link');

/* ======= Button Right ======= */
$button_two_text = get_field('button_two_text');
$button_two_link = get_field('button_two_link');

/* ======= Image ======= */
$header_img = get_field('header_img');

/* ======= Icons ======= */
$icon = get_field('icon');

?>
<?php get_header(); ?>

<!-- Block IMG-bottom -->

<section class="background-contain bg-15 bg-blue-lighteen pt120">
	<div class="container">
		<div class="row">
			<div class="crumina-module crumina-module-img-bottom">
				<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
					<div class="crumina-module-img-content medium-padding100">
						<div class="crumina-module crumina-heading">
							
							<?php if (empty($heading_subtitle)) : ?>
								<h6 class="heading-sup-title">Company</h6>
							<?php else : ?>
								<h6 class="heading-sup-title"><?php echo $heading_subtitle; ?></h6>
							<?php endif; ?>

							
							<h2 class="heading-title"><span class="c-primary">
							<?php if (empty($blue_heading_title)) : ?>						
								Welcome to Utouch!
							<?php else :
								echo $blue_heading_title;
							endif; ?>

							</span> 
							<?php if (empty($heading_title)) : ?>						
								We create high quality products that will make your life better.</h2>
							<?php else :
								echo $heading_title;
							endif; ?>
							
							<?php if (empty($heading-text)) : ?>
								<div class="h6 heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</div>
							<?php else : ?>
								<div class="h6 heading-text"><?php echo $heading-text; ?></div>
							<?php endif; ?>
						</div>

						<a href="<?php echo $button_one_link; ?>" class="btn btn-border btn--with-shadow c-primary">
							<?php if (empty($button_one_text)) : ?>
								Learn More
							<?php else : 
								echo $button_one_text;
							endif; ?>
						</a>

						<a href="<?php echo $button_two_link; ?>" class="btn btn--green btn--with-shadow">
							<?php if (empty($button_two_text)) : ?>
								Get trial version
							<?php else : 
								echo $button_two_text;
							endif; ?>
						</a>

					</div>
				</div>

				<div class="col-lg-4 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
					<?php if (empty($header_img)) : ?>
						<img class="img-bottom" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/man.png" alt="man">
					<?php else : ?>
						<img class="img-bottom" src="<?php echo $header_img['url']; ?>" alt="<?php echo $header_img['alt']; ?>">
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ... end Block IMG-bottom -->


<!-- Info Boxes -->

<section class="medium-padding100">
	<div class="container">
		<div class="row">

			<?php $i = 1; ?>
			<?php $loop = new WP_Query (array(
							'post_type' => 'info_aboutus',
							'orderby' => 'post_id',
							'order' => 'ASC'
						)); ?>

			<?php while ($loop -> have_posts()) : $loop -> the_post(); ?>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="crumina-module crumina-info-box info-box--numbers">
					<h5 class="order-number"><?php echo '0' . $i++ ?></h5>
					<h3 class="h5 info-box-title"><?php the_title(); ?></h3>
					<p class="info-box-text"><?php the_content(); ?>
					</p>
				</div>
			</div>
			<?php endwhile; ?><?php wp_reset_query(); ?>
		</div>
	</div>
</section>

<!-- ... end Info Boxes -->


<!-- Teammembers -->

<section class="medium-padding100">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
				<div class="crumina-module crumina-heading align-center">
					<h2 class="heading-title">Meet Our Professional Team</h2>
					<div class="heading-text">Mirum est notare quam littera gothica, quam nunc putamus parum claram,
						anteposuerit litterarum formas humanitatis per.
					</div>
				</div>
			</div>
						
			<div class="teammembers-wrap">
				<?php 

				$loop = new WP_Query (array(
					'post_type' => 'team_member',
					'orderby' => 'post_id',
					'order' => 'ASC'
				)); ?>

				<?php while ($loop -> have_posts()) : $loop -> the_post(); 

				$facebook_link = get_field('facebook_link');
				$twitter_link = get_field('twitter_link');
				$google_plus_link = get_field('google_plus_link');
				?>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

					<div class="crumina-module crumina-teammembers-item">
					
						<div class="teammembers-thumb">
							
							<?php 
							if (empty(has_post_thumbnail( ))) { ?>
								<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/teammember1.png" alt="team member">
							<?php } else {
								the_post_thumbnail( );
							}
							?>

						</div>

						<div class="teammember-content">
							
							<div class="teammembers-item-prof">
								<?php
									$team_profesie = get_field('team_profesie');
									if (empty($team_profesie)) { ?>
										Web Developer
									<?php } else {
										echo $team_profesie; 
									}
								?>
							</div>

							<a href="" class="h5 teammembers-item-name"><?php the_title(); ?></a>

							<p><?php the_content(); ?></p>

							<ul class="socials socials--round">
								
								<li>
									<a href="<?php echo $facebook_link; ?>" class="social__item fab fa-facebook-f"><?php echo $icon; ?></a>
								</li>

								<li>
									<a href="<?php echo $twitter_link; ?>" class="social__item fab fa-twitter"><?php echo $icon; ?></a>
								</li>

								<li>
									<a href="<?php echo $google_plus_link; ?>" class="social__item fab fa-google-plus-g"><?php echo $icon; ?></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<?php endwhile; ?><?php wp_reset_query(); ?>
			</div>
		</div>	
	</div>
</section>

<!-- ... end Teammembers -->


<?php get_footer(); ?>