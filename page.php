<?php get_header(); ?>
    <section id="post-<?php the_ID(); ?>" <?php post_class('wrapper'); ?> role="main">
        <div class="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="post-title"><?php the_title(); ?></h1>
                <h4 class="post-date sans"><?php the_date('F d, Y'); ?></h4>
                <div class="post-content sans"><?php the_content(); ?></div>
                <?php get_template_part('sharing'); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
