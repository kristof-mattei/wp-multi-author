<?php
/**
 * Plugin Name: WP Multi Author
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Sets the blog to multi author, so the author box is always displayed.
 * Version: 0.1
 * Author: Kristof Mattei
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
*/

function set_to_multi_author() 
{
	set_transient('is_multi_author', true);
}

add_action('init', 'set_to_multi_author');