<?php
/*
Plugin Name: Settings Page
Plugin URI: https://githum.com/ear78/wp_practice_1
Description: Demo plugin for learning about plugins
Version: 1.0
Author: Elliot Richardson
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: settingspage
Domain Path: /languages

 */

if( ! defined( 'WPINC')) {
    die;
}

function wpplugin_settings_page(){
    add_menu_page(
        'Plugin Name',
        'Plugin Menu',
        'manage_options',
        'settingspage',
        'wpplugin_settings_page_markup',
        'dashicons-wordpress-alt',
        100
    );
}

add_action( 'admin_menu', 'wpplugin_settings_page');

function wpplugin_settings_page_markup(){

    //check user capabilities
    if( !current_user_can('manage_options')){
        return;
    }

    ?>
    <div class="wrap">
        <h1><?php esc_html_e( get_admin_page_title()); ?></h1>
        <p><?php esc_html_e( 'Some content.', 'wpplugin' ); ?></p>
    </div>

    <?php } ?>