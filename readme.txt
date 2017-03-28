=== WP API Menus ===
Contributors: mrpharderwijk
Tags: wp-api, wp-rest-api, rest, api, frontpage, static page, home
Requires at least: 3.6.0
Tested up to: 4.7.x
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Extends WordPress WP REST API with new routes pointing to WordPress frontpage.


== Description ==

This plugin extends the [WordPress WP REST API](http://v2.wp-api.org/) with new routes for WordPress the static frontpage if a frontpage is set.

The new routes available will be:

* `wp-json/wp/v2/frontpage` outputs the frontpage page object


== Installation ==

This plugin requires having [WP REST API](http://v2.wp-api.org/) installed and activated or it won't be of any use. Since Wordpress 4.7 the WP REST API has been merged in the Wordpress core, so this plugin might not be needed any longer.

Install the plugin as you would with any WordPress plugin in your `wp-content/plugins/` directory or equivalent.

Once installed, activate WP REST API Frontpage from WordPress plugins dashboard page and you're ready to go, WP REST API will respond to the new route and endpoint.

Make sure you have selected a static frontpage at 'Settings > Reading > 
Front page displays'. Choose 'A static page (select below)', and select a front page from the drop down menu. Don't forget to safe!


== Changelog ==

= 1.0.1 =
* First public release