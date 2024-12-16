<?php
function custom_woocommerce_product_query($query)
{
    if (!is_admin() && $query->is_main_query() && is_product_category()) {
        $sort = $_GET['orderby'] ?? '';
        $isStock = $_GET['isStock'] ?? '';

        if ($sort === "name") {
            $query->set('orderby', 'title');
            $query->set('order', 'ASC');
        }

        if ($sort === "name_desc") {
            $query->set('orderby', 'title');
            $query->set('order', 'DESC');
        }

        if ($sort === "price") {
            $query->set('meta_key', '_price');
            $query->set('orderby', 'meta_value_num');
            $query->set('order', 'ASC');
        }

        if ($sort === "price_desc") {
            $query->set('meta_key', '_price');
            $query->set('orderby', 'meta_value_num');
            $query->set('order', 'DESC');
        }

        if ($isStock === "on") {
            $meta_query = $query->get('meta_query');
            $meta_query[] = [
                'key' => '_sale_price',
                'value' => 0,
                'compare' => '>',
                'type' => 'NUMERIC'
            ];
            $query->set('meta_query', $meta_query);
        }

        if (isset($_GET['minPrice']) && isset($_GET['maxPrice'])) {
            $meta_query = $query->get('meta_query');
            $meta_query[] = [
                'key' => '_price',
                'value' => [
                    sanitize_text_field($_GET['minPrice']),
                    sanitize_text_field($_GET['maxPrice'])
                ],
                'compare' => 'BETWEEN',
                'type' => 'NUMERIC'
            ];
            $query->set('meta_query', $meta_query);
        }

        $attributes = wc_get_attribute_taxonomies();
        foreach ($attributes as $attribute) {
            $attributeNameFull = "pa_" . $attribute->attribute_name;

            if (isset($_GET[$attributeNameFull])) {
                $valuesArr = (array) $_GET[$attributeNameFull];

                if (!empty($valuesArr)) {
                    $tax_query = $query->get('tax_query');
                    $tax_query[] = [
                        'taxonomy' => $attributeNameFull,
                        "field" => "slug",
                        "terms" =>  $valuesArr,
                    ];
                    $query->set('tax_query', $tax_query);
                }
            }
        }
    }
}
add_action('woocommerce_product_query', 'custom_woocommerce_product_query');
