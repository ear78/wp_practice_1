
<?php
    if( !is_active_sidebar('main-sidebar') ){
        return;
    }
?>

<aside id="id" class="widget-area" role="complementary">

    <?php dynamic_sidebar( 'main-sidebar' ); ?>

</aside>