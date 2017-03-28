<?php
/**
 * WP REST API Frontpage Routes
 *
 * @package WP_REST_API_frontpage
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if ( ! class_exists( 'WP_REST_API_frontpage' ) ) :


  /**
   * WP REST API frontpage class.
   *
   * WP REST API frontpage support for WP API v2.
   *
   * @package WP_REST_API_frontpage
   * @since 1.0.1
   */
  class WP_REST_API_frontpage {


    /**
     * Get WP API namespace.
     *
     * @since 1.0.1
     * @return string
     */
    public static function get_api_namespace() {
        return 'wp/v2';
    }


    /**
     * Get WP API Menus namespace.
     *
     * @since 1.0.1
     * @return string
     */
    public static function get_plugin_namespace() {
      return 'wp-rest-api-static/v2';
    }


    /**
     * Register menu routes for WP API v2.
     *
     * @since  1.0.1
     */
    public function register_routes() {

      register_rest_route( self::get_api_namespace(), '/frontpage', array(
          array(
            'methods'  => WP_REST_Server::READABLE,
            'callback' => array( $this, 'get_frontpage' )
          )
        )
      );
    }


    /**
     * Get the frontpage
     *
     * @since  1.0.1
     * @return Object of the frontpage (pageObject)
     */
    public static function get_frontpage() {

      $rest_url = trailingslashit( get_rest_url() . self::get_plugin_namespace() . '/frontpage/' );

      // Get the ID of the static frontpage. If not set it's 0
      $page_id = get_option('page_on_front');

      // Get the corresponding post object (let's show our intention explicitly)
      $post = ( $page_id > 0 ) ? get_post( $page_id ) : null;  

      // No static frontpage is set
      if( ! is_a( $post, 'WP_Post' ) )
          return new WP_Error( 'wpse-error', 
             esc_html__( 'No Static Frontpage', 'wpse' ), [ 'status' => 404 ] );

      // Response setup
      return new WP_REST_Response( $post, 200 );
    }
  }

endif;
