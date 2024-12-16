<?php
function show_admin_bar_for_logged_in_users($show)
{
    if (is_user_logged_in() && current_user_can('administrator')) {
        return false;
    } else {
        return false;
    }
}
add_filter('show_admin_bar', 'show_admin_bar_for_logged_in_users');