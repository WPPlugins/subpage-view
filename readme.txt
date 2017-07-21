=== Plugin Name ===
Contributors: codework
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3866418
Plugin homepage:  http://codework.dk/referencer/wp-plugins/
Tags: subpage, view, list, page, mce
Requires at least: 1.5
Tested up to: 3.1.0
Stable tag: 1.0.0

A plugin for showing subpages on a given page. Insert shortcode into MCE and a list of subpages will be shown.

== Description ==

Ever wanted to place a list of subpages on your page? This is the plugin you need.

Using the build in WP methods, this plugin enables you to list subpages on any given page.

Usage examples:
<ul>
<li>[subpage-view]</li>
<li>[subpage-view depth="2"]</li>
<li>[subpage-view title_li="Subpages:"]</li>
<li>[subpage-view depth="1" child_of="24"]</li>
</ul>

== Installation ==

Easy installation:<br />
1. Upload `subpage-view.php` to the `/wp-content/plugins/` directory<br />
2. Activate the plugin through the 'Plugins' menu in WordPress<br />
3. Place [subpage-view] (or any valid shortcode) in your MCE editor (see Description).<br />