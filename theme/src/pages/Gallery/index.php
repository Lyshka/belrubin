<?php
$theme_path_gallery = get_template_directory() . "/src/pages/Gallery/";
?>

<div class="xl:space-y-11 space-y-5">
    <?php
    require_once "{$theme_path_gallery}Content.php";
    require_once "{$theme_path_gallery}List.php";
    ?>
</div>