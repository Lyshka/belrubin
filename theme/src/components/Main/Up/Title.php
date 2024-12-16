<h1 class="title-page">
    <?php
    if (is_archive()) {
        the_archive_title();
    } else {
        the_title();
    }
    ?>
</h1>