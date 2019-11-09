=== Site Specific Plugin ===
Contributors: cbutlerjr
Tags: theme, edit, edits, customize, customization, customize, customization, css, php, jquery
Requires at least: 3.0.0
Tested up to: 5.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A handy little plugin to contain your theme/plugin customization snippets.

== Description ==

Think of this plugin as an alternative to adding code snippets to the functions.php, or style.css file in your child theme. Why? It keeps all of your changes in one location, independent of the other components that make up your web site. That means you can safely perform theme / plugin updates without the worry of losing your modifications as well as easily deactivating your customizations to check for conflicts.

*Note:* This plugin doesn't actually do anything on its own. It is simply a convenient place for you to store your own theme/plugin customizations.

== Installation ==

1. Upload `site-specific-plugin` to the `/wp-content/plugins/` directory
2. Add your customizations to the plugin either locally or via Plugins > Editor in the Dashboard
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Done!

== Usage ==

* Add any CSS snippets to `custom/style.css`. This file is found in this plugin.
* Add any PHP snippets to `custom/functions.php`. This file is found in this plugin.
* Add any jQuery snippets to `custom/custom.js`. This file is found in this plugin.
* Activate the plugin.

== Frequently Asked Questions ==

= Isn't this what child themes are for? =

Well, kind of. Sure, you can put your modifications in a child theme, but there are many places (including woothemes.com and wordpress.org) to download and use child themes. If you decide to use a child theme built by a third party and make modifications there, you would lose them when performing updates. Also if you make all your modifications in your own custom child theme then realise that you want to use a child theme from your favorite theme vendor, you'll have to move all of your modifications somewhere else. To avoid that hassle, use this plugin.


= Should I put all my customizations in this single plugin? =

That's entirely up to you. There's nothing to stop you from duplicating this plugin and changing the name. That way you could theoretically keep each of your customizations in its own individual plugin. This can be very handy when debugging, or if you want to quickly enable/disable a specific customizations temporarily.
