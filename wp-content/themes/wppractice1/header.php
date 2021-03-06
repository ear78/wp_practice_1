<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<!-- body_class() is used as a page template default -->
<body <?php body_class(); ?>>

    <div id="page">
        <a href="#content" class="skip-link">
            <?php esc_html__( 'skip to content', 'wppractice1'); ?>
        </a>

        <header id="masthead" class="site-header" role="banner">

            <div class="site-branding">
                <p class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' )); ?>"></a>
                    <?php bloginfo( 'name' ); ?>
                </p>
                <p class="site-description">
                    <?php bloginfo( 'description' ); ?>
                </p>
            </div>

            <!-- Main Navigation Menu -->
            <?php get_template_part( '/template-parts/navigation/navigation', 'main'); ?>

            <!-- Mobile Navigation Menu -->
            <?php get_template_part( '/template-parts/navigation/navigation', 'mobile'); ?>

        </header>

        <div id="content" class="site-content">



