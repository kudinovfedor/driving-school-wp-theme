</div><!-- .page-wrapper end-->

<footer class="footer js-footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>

    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <div class="logo">
		                <?php get_default_logo_link('logo-f.svg'); ?>
                    </div>

                    <p><?php _e('We are in social networks', 'brainworks') ?>:</p>

	                <?php if (has_social()) { ?>
                        <ul class="social">
			                <?php foreach (get_social() as $name => $social) { ?>
                                <li class="social-item">
                                    <a href="<?php echo esc_attr(esc_url($social['url'])); ?>" class="social-link social-<?php echo esc_attr($name); ?>" target="_blank">
						                <?php if (!empty($social['icon-html'])) {
							                echo strip_tags($social['icon-html'], '<i>');
						                } else { ?>
                                            <i class="<?php echo esc_attr($social['icon']); ?>" aria-hidden="true"
                                               aria-label="<?php echo esc_attr($social['text']); ?>"></i>
						                <?php } ?>
                                    </a>
                                </li>
			                <?php } ?>
                        </ul>
	                <?php } ?>
                </div>
                <div class="col-xs-12 col-md-3">
                    <nav class="footer-nav">
		                <?php wp_nav_menu(array(
			                'theme_location' => 'second-menu',
			                'container' => false,
			                'menu_class' => 'menu-container',
			                'menu_id' => '',
			                'fallback_cb' => 'wp_page_menu',
			                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			                'depth' => 2
		                )); ?>
                    </nav>
                </div>
                <div class="col-xs-12 col-md-3">
	                <?php
	                $address = get_theme_mod( 'bw_additional_address' );
	                if ( ! empty( $address ) ) {
		                _e( 'Address', 'brainworks' );
		                echo ':<br>';
		                echo ( $address );
	                } ?>
                </div>
                <div class="col-xs-12 col-md-3">
	                <?php if (has_phones()) { ?>
                        <ul class="phone">
			                <?php foreach (get_phones() as $phone) { ?>
                                <li class="phone-item">
                                    <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>" class="phone-number">
						                <?php echo strip_tags($phone, '<i>'); ?>
                                    </a>
                                </li>
			                <?php } ?>
                        </ul>
	                <?php } ?>

	                <?php
	                $work_schedule = get_theme_mod( 'bw_additional_work_schedule' );
	                if ( ! empty( $work_schedule ) ) { ?>
                        <div class="work-schedule">
			                <?php echo esc_html( $work_schedule ); ?>
                        </div>
	                <?php } ?>

                    <button type="button" class="button-medium button-outline <?php the_lang_class('js-free-consultation'); ?>">
		                <?php _e('Order a free consultation', 'brainworks'); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row d-flex flex-wrap">
                <div class="col-xs-12 col-md-6 copyright">
                    &copy; <?php echo date('Y'); ?>,
				    <?php _e('Driving school "Just"', 'brainworks') ?>
                </div>
                <div class="col-xs-12 col-md-6 developer text-right">
				    <?php _e('Developed by', 'brainworks') ?>
                    <a href="https://brainworks.pro/" target="_blank">BRAIN WORKS</a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end-->

<?php scroll_top(); ?>

<?php if (is_customize_preview()) { ?>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_scroll_top_display" }'>
        <?php esc_html_e('Edit Scroll Top', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_analytics_google_placed" }'>
        <?php esc_html_e('Edit Analytics Tracking Code', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_login_logo" }'>
        <?php esc_html_e('Edit Login Logo', 'brainworks'); ?>
    </button>
<?php } ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
