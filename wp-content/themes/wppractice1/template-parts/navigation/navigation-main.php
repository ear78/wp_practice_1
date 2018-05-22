
<nav id="site-navigation" class="main-navigation" role="navigation">
    <?php

    $args = [
            'theme_location' => 'navigation',
            'depth' => 3
        ];

    wp_nav_menu( $args );

    ?>
</nav>