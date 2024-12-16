<?php
const VERSION = "1.0.0";

function page_site()
{
    require_once get_template_directory() . '/src/css/index.php';
    require_once get_template_directory() . '/src/js/index.php';
}
add_action('wp_enqueue_scripts', 'page_site');

require_once get_template_directory() . '/src/global/index.php';
require_once get_template_directory() . '/src/components/index.php';