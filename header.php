<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body(); ?>

<div class="wrapper">

    <header class="header">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-xs-12 col-md-3">
	                <div class="logo">
		                <?php get_default_logo_link('logo.svg'); ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-9">
                    <div class="row d-flex align-items-center flex-wrap">
                        <div class="col-xs-12 col-md-6">
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
                        </div>
                        <div class="col-xs-12 col-md-6 text-right">
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
                            <button type="button" class="button-medium <?php the_lang_class('js-call-back'); ?>">
		                        <?php _e('Call back', 'brainworks'); ?>
                            </button>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center flex-wrap">
                        <div class="col-xs-12 col-md-9 col-lg-10 header-nav">
	                        <?php if (has_nav_menu('main-nav')) { ?>
                                <nav class="nav js-menu">
                                    <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
			                        <?php wp_nav_menu(array(
				                        'theme_location' => 'main-nav',
				                        'container' => false,
				                        'menu_class' => 'menu-container',
				                        'menu_id' => '',
				                        'fallback_cb' => 'wp_page_menu',
				                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				                        'depth' => 3
			                        )); ?>
                                </nav>
	                        <?php } ?>
                        </div>
                        <div class="col-xs-12 col-md-3 col-lg-2 text-right header-lang">
	                        <?php if (function_exists('pll_the_languages')) { ?>
                                <div class="lang">
			                        <?php pll_the_languages(array(
                                        'dropdown' => 1,
				                        'show_flags' => 0,
				                        'show_names' => 0,
				                        'hide_if_empty' => 0,
				                        'display_names_as' => 'name'
			                        )); ?>
                                </div>
	                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container js-container">

        <div class="nav-mobile-header">
            <button class="hamburger js-hamburger" type="button" tabindex="0">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
            <div class="logo"><?php get_default_logo_link('logo-f.svg'); ?></div>
        </div>
