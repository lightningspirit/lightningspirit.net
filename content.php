<?php
/**
 * @package lightningspirit.net
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title(sprintf('<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>

        <?php if ('post' == get_post_type()) : ?>
            <div class="entry-meta">
                <?php lightningspirit_posted_on(); ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php if (is_single()) : ?>
    <div class="entry-content">
        <?php
        /* translators: %s: Name of current post */
        the_content(sprintf(
            __('Continue reading %s <span class="meta-nav">&rarr;</span>', 'lightningspirit'), the_title('<span class="screen-reader-text">"', '"</span>', false)
        ));
        ?>

        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'lightningspirit'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php lightningspirit_entry_footer(); ?>
    </footer><!-- .entry-footer -->
    
    <?php endif; ?>
    
</article><!-- #post-## -->