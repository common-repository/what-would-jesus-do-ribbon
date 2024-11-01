<?php
/*
Plugin Name: What Would Jesus Do Ribbon
Plugin URI: http://scottkappler.com/wp-plugins-and-more
Description: When activated, this plugin will put a What Would Jesus Do Ribbon on the top right corner of your website linking to 12stone.com.
Author: Scott Kappler
Version: 1.0
License: GPLv2
Author URI: http://scottkappler.com/wp-plugins-and-more
*/

function render_jesus_ribbon() {
	$ribbon_url = plugins_url( 'jesus-ribbon.png', __FILE__ );
	echo "<a target='_blank' class='jesus_ribbon' href='http://12stone.com/'><img src='{$ribbon_url}' alt='What Would Jesus Do' style='position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer;' /></a>";
}
add_action( 'wp_footer', 'render_jesus_ribbon' );