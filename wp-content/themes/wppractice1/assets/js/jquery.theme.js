

jQuery(document).ready(function(){

    var is_yellow = false;
    jQuery('.primary').on('click', function(){

        var footerLink = jQuery('footer a');

            is_yellow = !is_yellow;

            if(is_yellow){
                footerLink.css( {
                    color: 'yellow',
                    transition: 'all .2s ease-out'
                });
            } else {
                footerLink.css( {
                    color: '#00f1ff',
                    transition: 'all .2s ease-out'
                });
            }

    });

    var is_rotated = false;
    jQuery('.toggle-icon').on('click', function(){

        is_rotated = !is_rotated;

        if(is_rotated){
            jQuery('.toggle-icon').css({
                transform: 'rotate(90deg)',
                transition: 'all .3s ease-out'
            })
        } else {
            jQuery('.toggle-icon').css({
                transform: 'rotate(0deg)',
                transition: 'all .3s ease-out'
            })
        }

        jQuery('.menu-navigation-container').toggle(300);
    })

});