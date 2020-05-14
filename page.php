<?php

/**
 * Template for displaying a page.
 */

?>

<?php get_header(); ?>

    <div class="row">
        <div class="col-xl-2 col-lg-0">
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="row">
                <div class="col-lg-7 col-md-12">
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
                <div class="col-lg-1 col-md-0 "></div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-right p-3">
                        <?php if ( is_active_sidebar( 'right-side-bar' ) ) : ?>
                            <?php dynamic_sidebar( 'right-side-bar' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-0">
        </div>

    </div>
<?php get_footer(); ?>