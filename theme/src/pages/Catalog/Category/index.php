<?php
$current_category = get_queried_object();

$child_categories = get_terms([
    'taxonomy'   => 'product_cat',
    'child_of'   => $current_category->term_id,
]);

if (!empty($child_categories) && !is_wp_error($child_categories)) {
    require_once get_template_directory() . "/src/pages/Catalog/Category/List.php";
} else {
    require_once get_template_directory() . "/src/pages/Catalog/Product/index.php";
}
