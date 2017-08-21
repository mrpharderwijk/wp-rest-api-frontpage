<?php
/**
 * WP REST API Frontpage Routes
 *
 * @package WP_REST_API_frontpage
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if ( ! class_exists( 'WP_JSON_API_frontpage' ) ) :


  /**
   * WP REST API frontpage class.
   *
   * WP REST API frontpage support for WP API v2.
   *
   * @package WP_REST_API_frontpage
   * @since 1.0.1
   */
  class WP_JSON_API_frontpage {


    /**
     * Register menu routes for WP API v2.
     *
     * @since  1.0.1
     */
    public function register_routes($routes) {

      $routes['/frontpage'] = array(
				array( array( $this, 'get_frontpage' ), WP_JSON_Server::READABLE ),
			);

      return $routes;
    }


    /**
     * Get the frontpage
     *
     * @since  1.0.1
     * @return Object of the frontpage (pageObject)
     */
    public static function get_frontpage() {

      // Get the ID of the static frontpage. If not set it's 0
      $page_id = get_option('page_on_front');

      // If the Frontpage is set, it's id shouldn't be 0
      if ( $page_id > 0 ) {

        // Set url for call to retrieve the post, need WP REST API for this
        $endpoint = get_json_url() . '/pages/' . $page_id;

        // Do the actual call to retrieve the pageObject by ID
        $response = file_get_contents($endpoint);

        // Decode the output
        $output = json_decode($response);

      } else {
        $output = null;
      }

      // No static frontpage is set
      if( empty($output) ) {
        return new WP_Error( 'wpse-error', 
          esc_html__( 'No Static Frontpage set', 'wpse' ), 
          [ 'status' => 404 ] );
      }

      // Response setup
      return $output;
    }
  }

endif;
