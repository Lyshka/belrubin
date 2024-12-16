<?php if (have_rows("gallery", GALLERY_ID_PAGE)) : ?>
    <ul class="grid xl:grid-cols-2 grid-cols-1 xl:gap-x-6 xl:gap-y-9 gap-y-5">
        <?php
        $i = 0;
        while (have_rows("gallery", GALLERY_ID_PAGE)) {
            the_row();

            if (is_front_page() && $i === 4) {
                break;
            }

            Help::getCard("gallery", [
                "info" => get_sub_field("info"),
            ]);
            $i++;
        }
        ?>
    </ul>
<?php endif; ?>