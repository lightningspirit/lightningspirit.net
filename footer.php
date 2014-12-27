<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lightningspirit.net
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <a href="<?php echo esc_url(__('http://wordpress.org/', 'lightningspirit')); ?>"><?php printf(__('Proudly powered by %s', 'lightningspirit'), 'WordPress'); ?></a>
        <span class="sep"> | </span>
        <?php printf(__('Theme: %1$s by %2$s.', 'lightningspirit'), '<a href="http://github.com/lightningspirit/lightningspirit.net">lightningspirit.net</a>', '<a href="http://lightningspirit.net" rel="designer">lightningspirit</a>'); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
