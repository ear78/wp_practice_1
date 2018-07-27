<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header role="banner">

        <span id="hamburger" class="dashicons dashicons-menu"></span>

        <?php get_template_part('template-parts/navigation/navigation', 'fullpage' ); ?>

        <?php get_template_part('template-parts/navigation/navigation', 'fullpageMobile' ); ?>

    </header>

    <div id="content" class="site-content">
