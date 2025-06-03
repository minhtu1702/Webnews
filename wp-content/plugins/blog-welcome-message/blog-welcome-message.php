<?php
/**
 * Plugin Name: Blog Welcome Message
 * Description: Hiển thị thông điệp chào mừng ở cuối mỗi bài viết.
 * Version: 1.0
 * Author: [Tên Sinh Viên]
 */

function blog_welcome_message($content) {
    if (is_single()) {
        $content .= '<p style="text-align: center; font-weight: bold;">Chào mừng bạn đến với Blog của [Tên Sinh Viên]</p>';
    }
    return $content;
}
add_filter('the_content', 'blog_welcome_message');
?>
