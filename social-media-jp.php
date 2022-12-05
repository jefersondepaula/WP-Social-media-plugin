<?php

/**
 * Plugin Name:       Social Media on your post
 * Plugin URI:        https://google.com
 * Description:       Show your social media icons on your post content
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Jeff 
 */

//security
if (!defined('ABSPATH')) {
    exit('Access Denied');
}


// abs path 
define('SOCIAL_MEDIA_JP_ABSPATH', plugin_dir_path(__FILE__));


//inc
require_once(SOCIAL_MEDIA_JP_ABSPATH.'inc/social-media-jp-content');
require_once(SOCIAL_MEDIA_JP_ABSPATH.'inc/social-media-jp-settings');