
jQuery(document).ready(function(){

    jQuery('.menu-item-has-children').on('mouseenter', function(){
        jQuery('.sub-menu').slideDown(200);
    })

    jQuery('.sub-menu , .menu-item-has-children').on('mouseleave', function(){
        jQuery('.sub-menu').slideUp(200);
    })

})