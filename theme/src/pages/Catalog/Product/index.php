<?php
$theme_path_catalog_product = get_template_directory() . "/src/pages/Catalog/Product/";
?>

<div class="xl:space-y-6 space-y-5">
    <?php
    require_once get_template_directory() .  "/src/components/Form/Sort.php";
    require_once "{$theme_path_catalog_product}List.php";
    ?>
</div>