<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header" class="header wrapper serif" role="banner">
        <div class="header__content content">
            <?php if(is_home()) { ?>
                <h1><a href="<?php echo get_home_url() ?>" title="Beam me up, Scotty!"><?php echo esc_html(get_bloginfo('name')); ?></a></h1>
                <p><?php bloginfo('description'); ?></p>
            <?php } else if(!is_single() && !is_page()) { ?>
                <h2><a href="<?php echo get_home_url() ?>" title="Beam me up, Scotty"><?php echo esc_html(get_bloginfo('name')); ?></a></h2>
                <p><?php bloginfo('description'); ?></p>
            <?php } ?>
        </div>
    </header>
