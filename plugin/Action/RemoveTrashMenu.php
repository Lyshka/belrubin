<?php
function removeTrashMenu()
{
    remove_menu_page('themes.php');
    remove_menu_page('edit.php?post_type=acf-field-group');
    remove_menu_page('upload.php');
    remove_menu_page('plugins.php');
    remove_menu_page('options-general.php');
    remove_menu_page('tools.php');
    remove_menu_page('edit.php');
    remove_menu_page('duplicator');
    remove_menu_page('edit-comments.php');
    remove_menu_page('users.php');
    remove_menu_page('wpseo_dashboard');
    remove_menu_page('index.php');
    remove_submenu_page('wpseo_dashboard', 'wpseo_dashboard');
    remove_submenu_page('wpseo_dashboard', 'wpseo_page_settings');
}
add_action('admin_menu', 'removeTrashMenu', 999);
