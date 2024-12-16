<?php if (have_rows("texts", ABOUT_ID_PAGE)) : ?>
    <ul class="xl:space-y-14 space-y-8">
        <?php
        $i = 0;
        while (have_rows("texts", ABOUT_ID_PAGE)) {
            the_row();

            if (is_front_page() && $i === 1) {
                break;
            }

            Help::getCard("about", [
                "info" => get_sub_field("info"),
                "index" => $i,
            ]);
            $i++;
        }
        ?>
    </ul>
<?php endif; ?>