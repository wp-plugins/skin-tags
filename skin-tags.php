<?php
/*
Plugin Name: Skin Tags
Plugin URI: http://paxoo.com/skin-tags
Description: Removes the non-breaking space from the <code>wp_tag_cloud()</code> output generated by WP 2.3+.
Version: 0.7
License: GPL
Author: Billy Halsey
Author URI: http://paxoo.com
*/

// ==========================================================================
// = Skin Tags -- Remove the non-breaking space from wp_tag_cloud()         =
// ==========================================================================

function stags_skin($tags)
{
    $tags = preg_replace('/\&nbsp\;/', ' ', $tags);
    return $tags;
}


add_filter('wp_tag_cloud', 'stags_skin');