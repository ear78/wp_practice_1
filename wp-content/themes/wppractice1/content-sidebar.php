
<?php
if( !is_active_sidebar('content-sidebar') ){
    return;
}
?>

<div id="id" class="widget-area" role="complementary">

    <?php dynamic_sidebar( 'content-sidebar' ); ?>

</div>