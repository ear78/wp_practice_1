
<?php
/*
Plugin Name:  Fab Functionality
Plugin URI:   https://elliotrichardson.com
Description:  Basic WordPress Plugin Header Comment
Version:      1.0
Author:       Elliot Richardson
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  fab-functionality
Domain Path:  /languages
*/


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function wpplugin_custom_admin_footer( $footer ) {

  $new_footer = str_replace( '.</span>', __(' and <a href="https://zacgordon.com">Zac Gordon</a>.</span>', 'wpplugin' ), $footer);
  return $new_footer;

}
add_filter( 'admin_footer_text', 'wpplugin_custom_admin_footer', 10, 1 );
