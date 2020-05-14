<?php

/**
 * Template for displaying the blog page.
 */

?>

<?php get_header(); ?>

    <div class="row">
        <div class="col-xl-2 col-lg-0">
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="p-3 main">
                        <?php

                        /**
                         * The posts loop, get the posts and display the excerpt, the amount of posts
                         * dislayed depending on the amount specified in WP dashboard settings.
                         */

                        if ( have_posts() ) {
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content/content', 'content' );
                            endwhile;
                        }
                        ?>
                        <?php if (show_posts_nav()) : ?>
                            <nav>
                                <ul class="pager">
                                    <li><?php next_posts_link('Previous'); ?></li>
                                    <li><?php previous_posts_link('Next'); ?></li>
                                </ul>
                            </nav>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-1 col-md-0 "></div>
                <div class="col-lg-4 col-md-12">
                    <div class="p-3 sidebar-right">
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