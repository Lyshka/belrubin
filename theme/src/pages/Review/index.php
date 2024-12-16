<?php if (have_rows("review", REVIEW_ID_PAGE)) : ?>
    <ul class="grid xl:grid-cols-2 grid-cols-1 xl:gap-y-8 gap-y-6 xl:gap-x-6">
        <?php
        while (have_rows("review", REVIEW_ID_PAGE)) {
            the_row();

            Help::getCard("review", [
                "info" => get_sub_field("info"),
            ]);
        }
        ?>
    </ul>
<?php endif; ?>