<?php global $wp_query;
if ($wp_query->max_num_pages > 1) { ?>
    <nav id="nav__below" class="nav__below navigation" role="navigation">
        <div class="nav__below-previous sans">
            <?php next_posts_link(sprintf(__('%s Older Posts', 'cn'), '<span class="meta-nav">&laquo;</span>')) ?>
        </div>
        <div class="nav__below-next sans">
            <?php previous_posts_link(sprintf(__('Newer Posts %s', 'cn'), '<span class="meta-nav">&raquo;</span>')) ?>
        </div>
    </nav>
<?php } ?>
