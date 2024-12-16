<!DOCTYPE html>
<html id="top" <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= wp_get_document_title() ?></title>
    <?php wp_head() ?>
    <script type="text/javascript">
        var ajaxurl = "<?= esc_url(admin_url('admin-ajax.php')); ?>";
    </script>
</head>

<body>
    <div id="wptime-plugin-preloader"></div>

    <?php
    require_once get_template_directory() . "/src/components/Header/index.php";
    require_once get_template_directory() . "/src/components/Additional/Breadcrumb.php";
    ?>

    <main class="site-container container-main site-margin">
        <?php
        if (!is_404()) {
            require_once get_template_directory() . "/src/components/Main/Up/index.php";
        }
        ?>
        <div class="site-margin !mt-0">