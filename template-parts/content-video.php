<?php
/*======== VIDEO SECTION =========*/
$video_section_name = get_field('video_section_name');
$video_name = get_field('video_name');
$video_content = get_field('video_content');
$video_button_name = get_field('video_button_name');
$video_url = get_field('video_url');
$video_image = get_field('video_image');
?>
<!-- Video -->

	<section class="bg-8 background-contain pt100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-heading">
							<?php if (empty(($video_section_name))) { ?>
								<h6 class="heading-sup-title">Watch the video</h6>
							<?php } else { ?>
								<h6 class="heading-sup-title"><?php echo $video_section_name; ?></h6>
							<?php } ?>
							
							<?php if (empty($video_name)) { ?>
								<h2 class="heading-title">How the <span class="c-primary">Utouch</span> works</h2>
							<?php } else { ?>
								<h2 class="heading-title"><span class="c-primary">Utah </span><?php echo $video_name; ?> </h2>
							<?php } ?>
							
							<?php if (empty($video_content)) { ?>
								<p class="heading-text">Claritas est etiam processus dynamicus, qui sequitur mutationem
									consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
									anteposuerit litterarum formas humanitatis per.
								</p>
							<?php } else { ?>
								<p class="heading-text"><?php echo $video_content; ?> </p>
							<?php } ?>
							
						</div>
						<a href="02_company.html" class="btn btn-small btn--icon-right btn-border btn--with-shadow c-primary">
							<svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
							<div class="text">

								<?php if (empty($video_button_name)) { ?>
									<span class="title">Get Started Now</span>
								<?php } else { ?>
									<span class="title"><?php echo $video_button_name; ?></span>
								<?php } ?>
								
							</div>
						</a>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-our-video">
							<div class="video-thumb">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/video-thumb.png" alt="video">

									<?php if (empty(($video_url))) { ?>
										<a href="https://www.youtube.com/watch?v=wnJ6LuUFpMo" class="video-control js-popup-iframe">
									<?php } else { ?>
										<a href="<?php echo $video_url; ?>" class="video-control js-popup-iframe">
									<?php } ?>
								
									<?php if (!empty($video_image)) { ?>
										<img src="<?php echo $video_image['url']; ?>" alt="<?php echo $video_image['alt']; ?>">
									<?php } else { ?>
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/play.png" alt="play">
									<?php } ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<!-- ... end Video -->