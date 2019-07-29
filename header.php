<?php

/**
 * The header file, contains the <head> of every page and the top navi.
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top navi sticky-header">
    <div class="container-fluid">
        <a class="navbar-brand brandlink" href="<?php echo site_url(); ?>"><?php echo bloginfo('name'); ?></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon my-toggler"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php

            /**
             * Use the WP_Bootstrap_Navwalker to generate a working boostrap 4 navigation.
             */

            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarSupportedContent',
                'menu_class'      => 'navbar-nav pl-3 pr-3',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) ); ?>

</nav>
<div class="container-fluid">
    <div class="row">

        <div class="col-12 p-0">
            <?php

            /**
             * Gets the header image specified in theme options if exists, otherwise
             * show theme default banner image.
             */

            if ( get_header_image() ) : ?>
                <img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="banner-img">
            <?php endif; ?>
        </div>
    </div>

    <div class="col-12 spacing-before-main"></div>