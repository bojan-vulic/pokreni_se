<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Animate JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
</head>

<body>

    <!-- header -->
    <section class="mainHeader">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><?php echo('Pokreni se'); ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'navbarNav',
                            'menu_class'        => 'nav navbar-nav ml-auto',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>


            </nav>
        </div>
        <hgroup class="container">
            <h1 class="animate__animated animate__slideInLeft col-md-12"><?php the_field('glavni_naslov'); ?></h1>
            <p class="lead col-md-12"><?php the_field('glavni_podnaslov'); ?></p>
        </hgroup>
    </section>
