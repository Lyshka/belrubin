<?php
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    add_theme_support('post-thumbnails', ['page', "product"]);
    add_theme_support('woocommerce');
    // add_post_type_support('page', 'excerpt');
}
