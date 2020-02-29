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
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7500" data-pause="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/interior.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block slider-bg">
                        <h5 class="slider-h5">Kahvila Lorem</h5>
                        <p class="slider-p">Laatukahvit, teet ja kakut.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/coffee.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block slider-bg">
                            <h5 class="slider-h5">Kahvilaadut</h5>
                            <p class="slider-p">Kaikki suosituimmat kahvilaadut, sekä monia muita.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/love.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block slider-bg">
                            <h5 class="slider-h5">Yhdessäoloa kahvin äärellä</h5>
                            <p class="slider-p">Kahvin äärellä syntyvät parhaat keskustelut :)</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 spacing-before-main"></div>
    </div>