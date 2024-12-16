<?php
function templateRedirect()
{
    define('PLUGIN_PATH_ACTION_REDIRECT', PLUGIN_PATH_ACTION . 'Redirect/');

    require_once PLUGIN_PATH_ACTION_REDIRECT . 'Woocommerce.php';
}
add_action('template_redirect', 'templateRedirect');
