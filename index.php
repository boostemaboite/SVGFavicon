<?php

/**
 * Plugin Name: SVGFavicon 
 * Plugin URI:  https://github.com/boostemaboite/SVGFavicon
 * Description: Add an SVG Favicon to your WordPress site
 * Version: 1.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author: Boostemaboite
 * Author URI: https://boostemaboite.dev
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: SVGFavicon
 * Domain Path: /languages/
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly

add_action('wp_head', 'enqueueFavicon');
add_action('admin_head', 'enqueueFavicon');

function enqueueFavicon()
{
    echo '<link rel="icon" href="' . plugin_dir_url(__FILE__) . 'favicon.svg?ver=1.1.0" type="image/svg+xml">';
};
