=== WP REST API Frontpage ===
Contributors: mrpharderwijk
Tags: wp-api, wp-rest-api, rest, api, frontpage, homepage static page, home
Requires at least: 3.6.0
Tested up to: 4.7.x
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Extends WordPress WP REST API with a new endpoint to retrieve the static homepage.


== Description ==

This plugin extends the native [WordPress WP REST API](http://v2.wp-api.org/) with a new endpoint for the static homepage chosen in 'Settings > Reading > Your homepage displays'.

The new endpoint will be available at:

- `wp-json/wp/v2/frontpage`, which outputs the homepage page object


== Installation ==

Install the plugin as you would with any WordPress plugin in your `wp-content/plugins/` directory or equivalent.

Once installed, activate WP REST API Frontpage from WordPress plugins dashboard page and you're ready to go. WP REST API will respond to the endpoint with the page object.

Make sure you have selected a static homepage at 'Settings > Reading > Your homepage displays'. Choose 'A static page (select below)', and select a homepage from the drop down menu. Don't forget to safe!

== Changelog ==
= 1.1.0 =
* Updated the readme
* Merged composer file pull request

= 1.0.1 =
* First public release