<?php get_header(); ?>

<?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>

<?php if (have_posts()) { ?>

    <?php while (have_posts()) {
        the_post();
        $default = get_template_directory_uri() . '/assets/img/no-photo-instructor.jpg';
        $thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'large') : $default;
        $thumbnail = sprintf("url('%s')", esc_url($thumbnail));
        ?>

        <article id="post-<?php the_ID() ?>" <?php post_class(['instructor-single']) ?>>

            <div class="instructor-item instructor-inner d-flex flex-wrap">

                <div class="instructor-thumbnail" style="background-image: <?php echo $thumbnail ?>"></div>

                <div class="instructor-content">

                    <div class="instructor-opt">
                        <svg class="svg-icon" width="24" height="25"><use xlink:href="#user"></use></svg>
                        <div class="instructor-opt-name"><?php _ex('Instructor name', 'instructor', 'brainworks') ?></div>
                        <h1 class="instructor-opt-value"><?php the_title() ?></h1>
                    </div>

                    <?php if (!empty(get_post_meta(get_the_ID(), 'instructor_experience', true))) { ?>
                        <div class="instructor-opt">
                            <svg class="svg-icon" width="30" height="22"><use xlink:href="#experience"></use></svg>
                            <div class="instructor-opt-name"><?php _ex('Experience', 'instructor', 'brainworks') ?></div>
                            <div class="instructor-opt-value"><?php e_post_meta('instructor_experience') ?></div>
                        </div>
                    <?php } ?>

                    <?php if (!empty(get_post_meta(get_the_ID(), 'instructor_car_brand', true))) { ?>
                        <div class="instructor-opt">
                            <svg class="svg-icon" width="30" height="25"><use xlink:href="#car"></use></svg>
                            <div class="instructor-opt-name"><?php _ex('Car brand', 'instructor', 'brainworks') ?></div>
                            <div class="instructor-opt-value"><?php e_post_meta('instructor_car_brand') ?></div>
                        </div>
                    <?php } ?>

                    <?php if (!empty(get_post_meta(get_the_ID(), 'instructor_price', true))) { ?>
                        <div class="instructor-opt">
                            <svg class="svg-icon" width="25" height="25"><use xlink:href="#price"></use></svg>
                            <div class="instructor-opt-name"><?php _ex('Price', 'instructor', 'brainworks') ?></div>
                            <div class="instructor-opt-value"><?php e_post_meta('instructor_price') ?></div>
                        </div>
                    <?php } ?>

                    <?php if(function_exists('the_ratings')) { ?>
                        <div class="instructor-opt">
                            <svg class="svg-icon" width="17" height="26"><use xlink:href="#rating"></use></svg>
                            <div class="instructor-opt-name"><?php _ex('Rating', 'instructor', 'brainworks') ?></div>
                            <div class="instructor-opt-rating"><?php the_ratings() ?></div>
                        </div>
                    <?php } ?>

                </div>

            </div>

            <div class="instructor-item instructor-about">
                <h2><?php _ex('About myself', 'instructor', 'brainworks') ?></h2>
                <?php the_content() ?>
            </div>

        </article>

    <?php } ?>

<?php } ?>

<?php get_footer(); ?>
