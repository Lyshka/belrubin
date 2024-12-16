<?php if (have_rows("review", REVIEW_ID_PAGE) || has_post_thumbnail(REVIEW_ID_PAGE)) : ?>
    <section class="group">
        <h2 class="title-main">Отзывы о нас</h2>

        <div class="grid xl:grid-cols-2 grid-cols-1 xl:gap-6 gap-5">
            <?php if (has_post_thumbnail(REVIEW_ID_PAGE)) : ?>
                <div class="xl:h-[474px] overflow-hidden">
                    <?= get_the_post_thumbnail(REVIEW_ID_PAGE, "large", [
                        "class" => "h-full w-full object-cover group-hover:scale-110",
                    ]); ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows("review", REVIEW_ID_PAGE)) : ?>
                <div id="reviewSlider" class="w-full overflow-hidden flex flex-col xl:gap-11 gap-6">
                    <nav>
                        <button class="prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.47712 10.778L15.6958 1L18 3.44406L9.9335 12L18 20.5559L15.6958 23L6.47712 13.222C6.17162 12.8979 6 12.4583 6 12C6 11.5417 6.17162 11.1021 6.47712 10.778Z" fill="white" />
                            </svg>
                        </button>

                        <button class="next">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5229 13.222L8.30425 23L6 20.5559L14.0665 12L6 3.44406L8.30425 1L17.5229 10.778C17.8284 11.1021 18 11.5417 18 12C18 12.4583 17.8284 12.8979 17.5229 13.222Z" fill="white" />
                            </svg>
                        </button>
                    </nav>

                    <ul class="swiper-wrapper">
                        <?php
                        while (have_rows("review", REVIEW_ID_PAGE)) {
                            the_row();

                            Help::getCard("review", [
                                "info" => get_sub_field("info"),
                            ]);
                        }
                        ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>