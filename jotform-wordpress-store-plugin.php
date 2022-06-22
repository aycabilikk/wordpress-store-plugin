<?php
/**
 * Plugin Name:       Jotform Shopping Cart
 * Description:       Create an online store and embed it in your site.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           2.0.0
 * Author:            Jotform
 * Author URI:        https://www.jotform.com
 * License:           GNU General Public License v3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package           jotform
 */

function jotform_wordpress_store_plugin_block_init() {
	wp_oembed_add_provider( "#https?://(secure\.|www\.|app\.)?(my)?jotform(pro|eu|z)?\.(com|net|us|ca|me|co)(/app/store)?/[0-9]*#i", "https://www.jotform.com/oembed", true);
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'jotform_wordpress_store_plugin_block_init' );
