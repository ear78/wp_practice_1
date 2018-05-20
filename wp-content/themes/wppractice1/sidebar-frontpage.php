
<?php
if( !is_active_sidebar('frontpage') ){
    return;
}
?>

<aside id="id" class="widget-area" role="complementary">

    <?php dynamic_sidebar( 'frontpage' ); ?>

</aside>