<?php get_header(); ?>
    <section id="loop" class="loop wrapper" role="main">
        <div class="content">
            <?php if (have_posts()) : ?>
                <header class="loop__header">
                    <h1><?php printf(__('Search Results for: %s', 'cn'), get_search_query()); ?></h1>
                </header>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="loop__post">
                        <h4 class="loop__post-date sans"><?php the_date('F d, Y'); ?></h4>
                        <h3 class="loop__post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title(); ?></a></h3>
                        <div class="loop__post-excerpt sans"><?php the_excerpt(); ?></div>
                        <div class="loop__post__meta">
                            <div class="loop__post__meta-categories sans">
                                <?php echo __('Published in:', 'cn'); ?>
                                <?php echo get_the_category_list(', '); ?>
                            </div>
                            <div class="loop__post__meta-tags sans"><?php the_tags(); ?></div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
                <?php get_template_part('nav', 'below'); ?>
            <?php else : ?>
                <header class="header">
                    <h1 class="entry-title"><?php _e('Nothing found', 'cn'); ?></h1>
                </header>
            <?php endif; ?>
        </div>
    </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
