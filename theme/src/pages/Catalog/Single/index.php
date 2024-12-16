<?php
$theme_path_catalog_single = get_template_directory() . "/src/pages/Catalog/Single/";
?>

<div class="grid xl:grid-cols-2 grid-cols-1 xl:gap-6 gap-8">
    <?php
    require_once "{$theme_path_catalog_single}Gallery.php";
    require_once "{$theme_path_catalog_single}Info.php";
    ?>
</div>

<?php
require_once "{$theme_path_catalog_single}Video.php";
require_once "{$theme_path_catalog_single}Recommend.php";
?>