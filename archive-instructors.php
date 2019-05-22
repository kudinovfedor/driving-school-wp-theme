<?php get_header(); ?>

<?php /*


<div class="hero">
    <h1 class="hero-headline"><?php post_type_archive_title() ?></h1>
</div>
*/ ?>

<?php if (have_posts()) { ?>

    <div class="instructor-list row d-flex flex-wrap">

        <?php while (have_posts()) {
            the_post();
            $default = get_template_directory_uri() . '/assets/img/no-photo-instructor.jpg';
            $thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'medium') : $default;
            $thumbnail = sprintf("url('%s')", esc_url($thumbnail));
            ?>

            <div id="post-<?php the_ID() ?>" <?php post_class(['instructor-item', 'd-flex', 'col-xs-12', 'col-md-6', 'col-lg-4']) ?>>

                <div class="instructor-inner">

                    <a class="instructor-thumbnail" href="<?php the_permalink() ?>" style="background-image: <?php echo $thumbnail ?>"></a>

                    <div class="instructor-content">

                        <div class="instructor-opt">
                            <svg class="svg-icon" width="24" height="25"><use xlink:href="#user"></use></svg>
                            <div class="instructor-opt-name"><?php _ex('Instructor name', 'instructor', 'brainworks') ?></div>
                            <div class="instructor-opt-value"><?php the_title() ?></div>
                        </div>

                        <div class="instructor-opt">
                            <svg class="svg-icon" width="25" height="25"><use xlink:href="#price"></use></svg>
                            <div class="instructor-opt-name"><?php _ex('Price', 'instructor', 'brainworks') ?></div>
                            <div class="instructor-opt-value"><?php e_post_meta('instructor_price') ?></div>
                        </div>

                        <?php if(function_exists('the_ratings')) { ?>
                            <div class="instructor-opt">
                                <svg class="svg-icon" width="17" height="26"><use xlink:href="#rating"></use></svg>
                                <div class="instructor-opt-name"><?php _ex('Rating', 'instructor', 'brainworks') ?></div>
                                <div class="instructor-opt-rating"><?php the_ratings() ?></div>
                            </div>
                        <?php } ?>

                        <?php /*
                        <div class="instructor-opt">
                            <svg class="svg-icon" width="30" height="25"><use xlink:href="#car"></use></svg>
                            <div class="instructor-opt-name"><?php _ex('Car brand', 'instructor', 'brainworks') ?></div>
                            <div class="instructor-opt-value"><?php e_post_meta('instructor_car_brand') ?></div>
                        </div>

                        <div class="instructor-opt">
                            <svg class="svg-icon" width="30" height="22"><use xlink:href="#experience"></use></svg>
                            <div class="instructor-opt-name"><?php _ex('Experience', 'instructor', 'brainworks') ?></div>
                            <div class="instructor-opt-value"><?php e_post_meta('instructor_experience') ?></div>
                        </div>
                        */ ?>

                    </div>

                </div>

            </div>

        <?php } ?>

    </div>

    <?php if (function_exists('bw_pagination')) bw_pagination() ?>

<?php } ?>

<?php get_footer(); ?>
