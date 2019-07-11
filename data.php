<?php
$posts = $wpdb->get_results("select post_title, post_content from wp_posts where post_status = 'publish' and post_type = 'post'");
  