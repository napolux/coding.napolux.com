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

add_action('comment_form_before', 'cn_enqueue_comment_reply_script');
function cn_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_filter('the_title', 'cn_title');
function cn_title($title)
{
    if ($title == '') {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter('wp_title', 'cn_filter_wp_title');
function cn_filter_wp_title($title)
{
    return $title . esc_attr(get_bloginfo('name'));
}

add_action('widgets_init', 'cn_widgets_init');
function cn_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'cn'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

function cn_custom_pings($comment)
{
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
    <?php
}

add_filter('get_comments_number', 'cn_comments_number');
function cn_comments_number($count)
{
    if (!is_admin()) {
        global $id;
        $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}

function get_random_post() {
    $args = [
        'post_type'        => 'post',
        'posts_per_page'   => 1,
        'orderby'          => 'rand',
        'post_status'      => 'publish',
    ];

    query_posts($args);

    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?> <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">Read more...</a>
    <?php endwhile; endif; wp_reset_query();
}
