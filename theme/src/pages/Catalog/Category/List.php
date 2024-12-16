<?php
$current_category = get_queried_object();

$child_categories = get_terms([
    'taxonomy'   => 'product_cat',
    "parent" => $current_category->term_id,
]);
?>

<ul class="grid md:grid-cols-3 grid-cols-2 xl:gap-x-6 gap-x-2 xl:gap-y-6 gap-y-5">
    <?php
    foreach ($child_categories as $category) {
        Help::getCard("category", [
            "category" => $category,
        ]);
    }
    ?>
</ul>