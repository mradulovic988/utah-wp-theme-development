<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
				<article class="hentry post post-standard has-post-thumbnail sticky post-standard-details">

					<div class="post-thumb">
						<?php if (has_post_thumbnail(  )) {
							the_post_thumbnail(  );
						} ?>
					</div>
					<?php
					if ( is_singular() ) :
						the_title( '<h3 class="entry-title">', '</h3>' );
					else :
						the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
					endif;

					if ( 'post' === get_post_type() ) :
						?>
							<div class="post__content-info">
								<div class="post-additional-info">
									<span class="post__author author vcard">
										 On
										<p class="fn"><?php the_date(); ?></p>

									</span>
									<span class="post__author author vcard">
										 By
										<a href="<?php the_author_link(); ?>" class="fn"><?php the_author(); ?></a>

									</span>

									<span class="category">
										In
										<?php the_category( ', ' ); ?>
									</span>

									<span class="post__comments">
										<a href="#"><?php comments_number(0, 1, '%'); ?><span> Comments</span></a>
										
									</span>

									

								</div>

							</div>
					</div>

				<?php endif; ?>
	</article>
</header><!-- .entry-header -->

	<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'utah' ),
				array(
					'span' => array(
					'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'utah' ),
			'after'  => '</div>',
		) );
		?>
</article>