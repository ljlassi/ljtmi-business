<?php

/**
 * Template for displaying a page.
 */

?>

<?php get_header("frontpage"); ?>

    <div class="row">
        <div class="col-md-2 col-sm-0 spacing-sides">
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="main p-3">
                        <?php

                        /**
                         * The post loop, call get the template for displaying page if there is a page to display.
                         */


                        if ( have_posts() ) {
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content/content', 'page' );
                            endwhile;
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-1 col-sm-0 "></div>
                <div class="col-md-4 col-sm-12">
                    <div class="sidebar-right p-3">
                        <?php if ( is_active_sidebar( 'right-side-bar' ) ) : ?>
                            <?php dynamic_sidebar( 'right-side-bar' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-0 spacing-sides">
        </div>

    </div>
<?php get_footer(); ?>