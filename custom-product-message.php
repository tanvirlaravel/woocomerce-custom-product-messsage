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
    // Function to display custom message
    function add_custom_message_to_product() {
        echo '<p style="color: red;">This is a custom message added by your plugin.</p>';
    }

    // Hook the function to display after the product summary
    add_action( 'woocommerce_single_product_summary', 'add_custom_message_to_product', 20 );

}


