<footer id="footer" class="footer sans" role="contentinfo">
    <div class="footer__top wrapper">
        <div class="footer__top-content content">
            <h6 class="sans footer__top-content-intro">MORE WORDS...</h6>
            <?php
                if (function_exists('get_random_post')) {
                    get_random_post();
                } else {
                    echo 'Please check your functions.php file.';
                }
            ?>
        </div>
    </div>
    <div class="footer__bottom wrapper">
        <div class="footer__bottom-content content">
            <h2>About me</h2>
            <p>I'm Francesco, a programmer. Somebody call me <strong>Napo</strong> or <strong>Napolux</strong>.
            This is my blog about coding. You can find all the small projects I work on in my spare time here. </p>
            <p>If you like these tutorials or you think they're useful, <a title="Make me a 3.99€ donation using PayPal" href="https://www.paypal.me/napolux/3.99">you can buy me a coffee using PayPal</a>.</p>
            <p>Please, read the license: <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA</a>.
            Made with <a href="https://wordpress.org" title="WordPress">WordPress</a>.</p>
        </div>
    </div>
    <div class="footer__widget" id="footer-widget-area">
        <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
