<?php

/*
Plugin Name: Site renamer
Description: Match the blogname option with the current theme name.
Version: 1.0
License: GPLv2 or later
License URI: https://www.opensource.org/licenses/GPL-2.0
Author: seufelipe
Author URI: https://seufelipe.me/
*/

function site_renamer()
{
    $theme_name = wp_get_theme();

    update_option('blogname', $theme_name);
}
add_action('after_switch_theme', 'site_renamer', 10, 2);
