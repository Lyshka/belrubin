<?php if (have_rows("gallery", GALLERY_ID_PAGE)) : ?>
    <section>
        <h2 class="title-main">Галерея</h2>

        <div class="flex flex-col xl:gap-11 gap-8 items-center">
            <?php require_once get_template_directory() . "/src/pages/Gallery/List.php"; ?>

            <a href="<?= Help::getChildPageById(GALLERY_ID_PAGE); ?>" class="main-btn red">
                Перейти в галерею
            </a>
        </div>
    </section>
<?php endif; ?>