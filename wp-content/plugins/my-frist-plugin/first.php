<?php
/*
Plugin Name: List Users Plugin
Description: A plugin to list all users in the WordPress admin area.
Version: 1.0
Author: TNU
*/
                     function myplugin_hello_world() {
    return "<p><strong>Xin chào từ Plugin đầu tiên!</strong></p>";
}
add_shortcode('hello_plugin', 'myplugin_hello_world');
