# WP REST API Frontpage

This plugin extends the native [WordPress WP REST API](http://v2.wp-api.org/) with a new endpoint for the static homepage chosen in 'Settings > Reading > Your homepage displays'.

The new endpoint will be available at:

- `wp-json/wp/v2/frontpage`, which outputs the homepage page object

## Installation

Install the plugin as you would with any WordPress plugin in your `wp-content/plugins/` directory or equivalent.

Once installed, activate WP REST API Frontpage from WordPress plugins dashboard page and you're ready to go. WP REST API will respond to the endpoint with the page object.

Make sure you have selected a static homepage at 'Settings > Reading > Your homepage displays'. Choose 'A static page (select below)', and select a homepage from the drop down menu. Don't forget to safe!

## Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](../../issues/new).

## Author

**Marnix Harderwijk**

- [github/mrpharderwijk](https://github.com/mrpharderwijk)

## License

Copyright © 2017, [Marnix Harderwijk](https://github.com/mrpharderwijk).
Released under the [GPLv2 or later](http://www.gnu.org/licenses/gpl-2.0.html).
