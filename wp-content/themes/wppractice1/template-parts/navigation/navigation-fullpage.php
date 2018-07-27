<style>

    #fullpage-nav-mobile {
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        transform: translate3d(-50%,0,0);
        background: black;
        height: 100%;
        padding-top: 60px;
        z-index: 10;
        transition: all .25s ease-in-out;
        font-weight: 200;
        font-size: .8em;
    }

    #fullpage-nav-mobile.active {
        transform: translate3d(0,0,0);
    }

    #fullpage-nav-mobile .menu {
        display: flex;
        flex-direction: column;
        background: transparent;
        padding-top: 50px;
    }

    #fullpage-nav span,
    #fullpage-nav-mobile span {
        color: #fff;
    }

    #fullpage-nav-mobile #fullpage-menu-icon {
        display: block;
        padding-left: 20px;
        font-size: 28px;
        position: absolute;
        top: 75px;
        color: white;
    }

    #close-nav {
        position: absolute;
        top: 12px;
        right: 12px;
    }

    #hamburger {
        position: absolute;
        top: 20px;
        left: 15px;
        font-size: 25px;
        color: #fff;
        width: 28px;
        height: 28px;
    }



    @media screen and (min-width: 768px){

        #fullpage-nav {
            background: transparent;
            transform: translate3d(0,0,0);
        }

        #fullpage-nav .menu {
            background: transparent;
            justify-content: flex-end;
            font-size: .8em;
            letter-spacing: 2px;
            font-weight: 200;
        }
        
        #hamburger {
            display: none;
        }
    }

</style>

    <div id="fullpage-nav">

        <?php

        $args = [
            'theme_location' => 'navigation',
            'depth' => 3,
            'container' => false
        ];

        wp_nav_menu( $args );

        ?>

    </div>


    <!-- Mobile Menu Offscreen Initially -->

    <div id="fullpage-nav-mobile">

        <span id="close-nav" class="dashicons dashicons-no-alt"></span>

        <span id="fullpage-menu-icon" class="dashicons dashicons-wordpress"></span>

        <?php

        $args = [
            'theme_location' => 'navigation',
            'depth' => 3,
            'container' => false
        ];

        wp_nav_menu( $args );

        ?>
    </div>


