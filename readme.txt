=== Prevent XMLRPC ===
Contributors: nathancbriggs
Donate link: http://wpshine.com/
Tags: xmlrpc, trackback, spam, security
Requires at least: 3.0.1
Tested up to: 3.5
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Totally disables XMLRPC, preventing the recent Pingback spam vulnerability.

== Description ==

There's a vulnerability in WordPress's XMLRPC implementation, that permits trackback spam - even when you disable trackbacks.

The only way to prevent this spam is to disable XMLRPC entirely. Some people have suggested renaming or deleting the xmlrpc.php file, but this is not a good idea, because it's altering core code and not trivial for novice users to undo.

This plugin completely disables WordPress's XMLRPC functions, and doesn't alter or rename any core files. You can enable XMLRPC again by simply disabling this plugin.

See http://www.acunetix.com/blog/web-security-zone/wordpress-pingback-vulnerability/ for detailed information about the vulnerability in WordPress's XMLRPC handler.

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. That's it!

== Frequently Asked Questions ==

= My Windows Live Writer does work =

Windows Live Writer, and other similar services, use the XMLRPC interface to "talk" to your WordPress site, so it won't work while this plugin is active.


== Changelog ==

= 0.1 =
* First release

== Credits ==
Props to Bogdan Calin at Acunetix.com and Gennady Kovshenin at codeseekah.com for finding and discussing the vulnerability.

Props also to Judy Kettenhofen, my partner at wpshine.com, for giving me the idea to write this plugin.
