<?php
/*
Plugin Name: Custom Product Message
Description: This si my First woocomerce plugin
Version: 1.0
Author: Md Tanvirul Islam
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}


if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    
    // WooCommerce is active, add your custom functions here
    

}


