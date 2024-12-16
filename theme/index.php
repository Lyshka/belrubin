<?php
get_header();
$theme_path_pages = get_template_directory() . "/src/pages/";

if (is_page(CONTACT_ID_PAGE)) {
    require_once "{$theme_path_pages}Contact/index.php";
}

if (is_page(GALLERY_ID_PAGE)) {
    require_once "{$theme_path_pages}Gallery/index.php";
}

if (is_page(CONTACT_ID_PAGE)) {
    require_once "{$theme_path_pages}Contact/index.php";
}

if (is_page(ABOUT_ID_PAGE)) {
    require_once "{$theme_path_pages}About/index.php";
}

if (is_page(REVIEW_ID_PAGE)) {
    require_once "{$theme_path_pages}Review/index.php";
}

if (is_page(THANK_ID_PAGE)) {
    require_once "{$theme_path_pages}Thank/index.php";
}

get_footer();
