<?php get_header(); ?>
    <section id="loop" class="loop wrapper" role="main">
        <div class="content">
            <header class="loop__header">
                <h1>
                    <?php
                        if (is_day()) {
                            printf(__('Daily Archives: %s', 'cn'), get_the_time(get_option('date_format')));
                        } elseif (is_month()) {
                            printf(__('Monthly Archives: %s', 'cn'), get_the_time('F Y'));
                        } elseif (is_year()) {
                            printf(__('Yearly Archives: %s', 'cn'), get_the_time('Y'));
                        } else {
                            _e('Archives', 'cn');
                        }
                    ?>
                </h1>
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
        </div>
    </section>
<?php get_footer(); ?>
