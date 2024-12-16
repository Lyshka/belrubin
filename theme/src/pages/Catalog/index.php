<?php
$product_categories = get_terms([
    'taxonomy'   => 'product_cat',
    "parent" => 0,
]);

if (!empty($product_categories) && !is_wp_error($product_categories)) :
?>
    <ul class="grid md:grid-cols-3 grid-cols-2 xl:gap-x-6 gap-x-2 xl:gap-y-6 gap-y-5">
        <?php
        foreach ($product_categories as $category) {
            Help::getCard("category", [
                "category" => $category,
            ]);
        }
        ?>
    </ul>
<?php
else :
    require_once get_template_directory() . "/src/components/Additional/NotFound.php";
endif;
