
<nav id="mobile-navigation" class="mobile-navigation" role="navigation">
    <div class="icon-container">
        <span class="toggle-icon">+</span>
    </div>

    <?php

    $args = [ 'theme_location' => 'navigation'];

    wp_nav_menu( $args );

    ?>

</nav>