</div><!-- container -->
<footer id="footer" class="footer sans" role="contentinfo">
    <div class="footer__top">
        <div class="footer__top-content">
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
    <div class="footer__bottom">
        <div class="footer__bottom-content">
            <h2>About me</h2>
            <p>I'm Francesco, a programmer. Somebody call me <strong>Napo</strong> or <strong>Napolux</strong>.
            This is my blog about coding. You can find all the small projects I work on in my spare time here. If you like them or you think they're useful, <a href="https://www.paypal.me/napolux/4.99">you can buy me a coffee using PayPal</a>.</p>
            <p>Please, read the license: <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA</a>.
            Made with <a href="https://wordpress.org" title="WordPress">WordPress</a>.</p>
        </div>
    </div>
</footer>
</div><!-- wrapper -->
<?php wp_footer(); ?>
</body>
</html>
