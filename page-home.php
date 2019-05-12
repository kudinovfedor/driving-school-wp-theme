<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>

<?php /*
<div style="padding: 40px 0;">
	$args = [
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'orderby'        => 'post_date',
		'order'          => 'DESC',
		'posts_per_page' => 3
	];

	$query = new WP_Query( $args );
	$count = $query->post_count;

	$index = 1;

	if ( $query->have_posts() ) { ?>
        <div class="entry-list row d-flex flex-wrap">
            <div class="col-xs-12 col-lg-8 d-flex">
				<?php while ( $query->have_posts() ) {
					$query->the_post();
					$thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'medium-large' ) : 'none';
					$bg        = $thumbnail !== 'none' ? "url('" . esc_url( $thumbnail ) . "')" : $thumbnail;
					if ( $index === 1 ) { ?>
                        <div id="post-<?php the_ID() ?>" <?php post_class( 'entry-item entry-primary' ) ?>>
                            <div class="entry-thumbnail" style="background-image: <?php echo $bg; ?>;">

                            </div>
                            <div class="entry-content">
                                <time class="entry-date" datetime="<?php echo get_the_date( 'c' ) ?>">
									<?php echo get_the_date( 'd M Y' ) ?>
                                </time>
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>" class="entry-link"><?php the_title() ?></a>
                                </h3>
								<?php if ( has_excerpt() ) { ?>
                                    <div class="entry-excerpt"><?php the_excerpt(); ?></div>
								<?php } ?>
                                <a class="entry-more" href="<?php the_permalink(); ?>">
									<?php _e( 'Read', 'brainworks' ); ?>
                                    <i class="fal fa-long-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
						<?php break;
					} ?>
				<?php }
				wp_reset_postdata(); ?>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="row">
					<?php
					$index = 2;
					while ( $query->have_posts() ) {
						$query->the_post();
						$thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'medium' ) : 'none';
						$bg        = $thumbnail !== 'none' ? "url('" . esc_url( $thumbnail ) . "')" : $thumbnail;
						if ( $index !== 0 ) { ?>
                            <div class="col-xs-12 col-md-6 col-lg-12">
                                <div id="post-<?php the_ID() ?>" <?php post_class( 'entry-item entry-secondary ' ) ?>
                                     style="background-image: <?php echo $bg; ?>;">
                                    <time class="entry-date" datetime="<?php echo get_the_date( 'c' ) ?>">
										<?php echo get_the_date( 'd M Y' ) ?>
                                    </time>
                                    <h3 class="entry-title">
                                        <a href="<?php the_permalink(); ?>" class="entry-link"><?php the_title() ?></a>
                                    </h3>
                                </div>
                            </div>
							<?php if ( $count === $index ) { ?>
                                <div class="entry-btn col-xs-12 col-md-6 col-lg-12">
                                    <a href="<?php echo get_post_type_archive_link( 'post' ) ?>" class="button-medium ">
										<?php _e( 'All news', 'brainworks' ); ?>
                                        <i class="fal fa-long-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
							<?php } ?>
						<?php }
						$index ++;
					}
					wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
	<?php }

	<?php echo do_shortcode('[last-posts]'); ?>
	<br>
	<?php echo do_shortcode('[bw-reviews]'); ?>
</div>
*/?>

<?php get_template_part('loops/content', 'home'); ?>

<?php get_footer(); ?>
