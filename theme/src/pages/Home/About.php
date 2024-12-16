<?php if (have_rows("texts", ABOUT_ID_PAGE)) : ?>
    <section>
        <h2 class="title-main">О нашей компании</h2>

        <?php require_once get_template_directory() . "/src/pages/About/Text.php"; ?>
    </section>
<?php endif; ?>