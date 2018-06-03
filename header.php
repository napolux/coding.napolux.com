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
                <h1><?php echo esc_html(get_bloginfo('name')); ?></h1>
                <p><?php bloginfo('description'); ?></p>
            <?php } else if(!is_single()) { ?>
                <h2><?php echo esc_html(get_bloginfo('name')); ?></h2>
                <p><?php bloginfo('description'); ?></p>
            <?php } ?>
        </div>
    </header>
