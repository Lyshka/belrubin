<?php
function removeTrashBar($wp_admin_bar)
{
    $wp_admin_bar->remove_node('comments');
    $wp_admin_bar->remove_node('new-content');
    $wp_admin_bar->remove_node('wpseo-menu');
}
add_action('admin_bar_menu', 'removeTrashBar', 999);
