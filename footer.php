<?php

/**
 * Template for displaying the footer.
 */

?>

<?php wp_footer(); ?>

<div class="row">
    <div class="col-md-4 col-12 p-2 footer">
        <?php if ( is_active_sidebar( 'footer-left-widget-area' ) ) : ?>
            <?php dynamic_sidebar( 'footer-left-widget-area' ); ?>
        <?php endif; ?>
    </div>
    <div class="col-md-4 col-12 p-2 footer">
        <?php if ( is_active_sidebar( 'footer-middle-widget-area' ) ) : ?>
            <?php dynamic_sidebar( 'footer-middle-widget-area' ); ?>
        <?php endif; ?>
    </div>
    <div class="col-md-4 col-12 p-2 footer">
        <?php if ( is_active_sidebar( 'footer-right-widget-area' ) ) : ?>
            <?php dynamic_sidebar( 'footer-right-widget-area' ); ?>
        <?php endif; ?>
    </div>
</div>
</div>
</body>
</html>