<style>

    #fullpage-nav {
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
    }

    #fullpage-nav .menu {
        background: transparent;
        justify-content: flex-end;
        font-size: .8em;
        letter-spacing: 2px;
        font-weight: 200;
    }

    @media screen and (max-width: 768px){
        #fullpage-nav {
            transform: translate3d(-100%,0,0);
            background: black;
            height: 100%;
            padding-top: 60px;
            z-index: 10;
            transition: all .25s ease-in-out;
        }

        #fullpage-nav.active {
            transform: translate3d(0,0,0);
        }

        #fullpage-nav .menu {
            padding-top: 50px;
        }

        #fullpage-nav  span {
            color: #fff;
        }

        #close-nav {
            position: absolute;
            top: 12px;
            right: 12px;
            /*color: #fff;*/
        }
    }



</style>

    <div id="fullpage-nav">
        <span id="close-nav" class="dashicons dashicons-no-alt"></span>

        <?php

        $args = [
            'theme_location' => 'navigation',
            'depth' => 3,
//        'container_id' => 'fullpage-nav'
            'container' => false
        ];

        wp_nav_menu( $args );

        ?>

        <span class="dashicons dashicons-wordpress"></span>

    </div>


