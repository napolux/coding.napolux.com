<?php
add_action('after_setup_theme', 'cn_setup');
function cn_setup()
{
    load_theme_textdomain('cn', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    global $content_width;
    if (!isset($content_width)) $content_width = 640;
    register_nav_menus(
        array('main-menu' => __('Main Menu', 'cn'))
    );
}

add_action('wp_enqueue_scripts', 'cn_load_scripts');
function cn_load_scripts()
{
    wp_enqueue_script('jquery');
}

add_action('widgets_init', 'cn_widgets_init');
function cn_widgets_init()
{
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'cn'),
        'id' => 'footer-widget-area',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

function get_random_post() {
    $args = [
        'post_type'        => 'post',
        'posts_per_page'   => 1,
        'orderby'          => 'rand',
        'post_status'      => 'publish'
    ];

    if(is_single()) {
        $args['post__not_in'] = [get_the_ID()];
    }

    query_posts($args);

    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?> <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">Read more &raquo;</a>
    <?php endwhile; endif; wp_reset_query();
}
