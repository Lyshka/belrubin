<?php
$theme_path_about = get_template_directory() . "/src/pages/About/";
?>

<div class="xl:space-y-14 space-y-8">
    <?php
    require_once "{$theme_path_about}Text.php";
    require_once "{$theme_path_about}BusinessDevelopment.php";
    require_once "{$theme_path_about}Video.php";
    require_once "{$theme_path_about}AdditionalText.php";
    ?>
</div>

<?php require_once "{$theme_path_about}License.php"; ?>