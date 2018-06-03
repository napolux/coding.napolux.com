<div class="post-comments">
    <p class="sans">
        If you want to share a comment or report an issue with this <?php echo (is_page()) ? 'page' : 'post'; ?>, please send me an email to <a href="mailto:napolux+coding@gmail.com">napolux@gmail.com</a>
    </p>
</div>
<div class="post-sharing">
    <p class="sans">
        Share on:
        <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php rawurlencode(the_title()); ?>&url=<?php the_permalink(); ?>&via=napolux">Twitter</a>,
        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">Facebook</a>,
        <a target="_blank" href="http://www.reddit.com/submit?url=<?php the_permalink(); ?>&title=<?php rawurlencode(the_title()); ?>">Reddit</a>,
        <a target="_blank" href="https://news.ycombinator.com/submitlink?u=<?php the_permalink(); ?>&t=<?php rawurlencode(the_title()); ?>">Hacker News</a>
        or <a href="<?php echo get_home_url() ?>" title="Beam me up, Scotty">go back home</a>.
    </p>
</div>
