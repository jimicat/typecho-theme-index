<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div>
</div>
</div>

<footer>
    <hr>
    <div class="footer-text">
        &copy; <?php echo date('Y'); ?> <?php $this->options->title(); ?>
        <div><a href="mailto:941104c@gmail.com">Email</a></div>
        <div>Modify based on <a href="https://github.com/adityatelange/hugo-index/">Index</a></div>
        <div class="rss">
            <a href="rss.xml">
                <img src="<?php Helper::options()->themeUrl('images/rss.png'); ?>" alt="Subscribe to RSS Feed">
            </a>
        </div>
    </div>

</footer>

<?php $this->footer(); ?>
</body>

</html>