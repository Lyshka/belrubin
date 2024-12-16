<?php
function footerScript()
{
    define('PLUGIN_PATH_ACTION_FOOTER', PLUGIN_PATH_ACTION . 'Footer/');
}
add_action('wp_footer', 'footerScript');
