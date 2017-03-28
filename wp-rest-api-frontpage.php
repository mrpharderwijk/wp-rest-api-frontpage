<?php
/**
 * Plugin Name: WP REST API Frontpage
 * Plugin URI:  https://github.com/mrpharderwijk/wp-rest-api-frontpage
 * Description: Extends WP REST API with WordPress frontpage
 *
 * Version:     1.0.1
 *
 * Author:      Marnix Harderwijk
 * Author URI:  https://github.com/mrpharderwijk
 *
 * Text Domain: wp-rest-api-frontpage
 *
 * @package WP_REST_API_frontpage
 */

/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

// WP API v2.
include_once 'includes/wp-rest-api-frontpage-v2.php';

if ( ! function_exists ( 'wp_rest_api_frontpage_init' ) ) :

  /**
   * Init JSON REST API Static Routes.
   *
   * @since 1.0.0
   */
  function wp_rest_api_frontpage_init() {
    $class = new WP_REST_API_frontpage();
    add_filter( 'rest_api_init', array( $class, 'register_routes' ) );
  }

  add_action( 'init', 'wp_rest_api_frontpage_init' );

endif;
