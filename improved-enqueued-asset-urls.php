<?php
/**
 * Plugin Name: Improve Enqueued Asset URLs
 * Plugin URI:
 * Description: Improve caching for browsers by improving enqueued asset URLs
 * Version: 0.0.1
 * Author: Timothy Wood (@codearachnid)
 * Author URI: http://www.codearachnid.com
 * Author Email: tim@imaginesimplicity.com
 * Text Domain: 'improved-enqueued-asset-urls'
 * License:
 *
 *     Copyright 2013 Imagine Simplicity (tim@imaginesimplicity.com)
 *     License: GNU General Public License v3.0
 *     License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @author codearachnid
 *
 */
 
if ( ! defined( 'ABSPATH' ) ) die( '-1' );

function improved_enqueued_asset_urls( $src ){
	return $src;
}

add_filter( 'script_loader_src', 'improved_enqueued_asset_urls', 100, 1 );
add_filter( 'style_loader_src', 'improved_enqueued_asset_urls', 100, 1 );