<?php
$theme_path_components_main_up = get_template_directory() . "/src/components/Main/Up/";

if (!is_front_page() && !is_page(THANK_ID_PAGE)) {
    require_once "{$theme_path_components_main_up}Title.php";
}
