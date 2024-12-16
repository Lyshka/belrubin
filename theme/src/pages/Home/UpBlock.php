<?php
$condition = get_the_title() || get_the_content() || Help::getLinkPageById(SHOP_ID_PAGE);

if ($condition || has_post_thumbnail()) :
    $title = get_the_title();
    $words = preg_split('/\s+/', trim($title));

    $last_word = end($words);
    $all_but_last = array_slice($words, 0, -1);

    $sentence_without_last_word = implode(' ', $all_but_last);
?>
    <section id="upBlockHome" class="group site-full bg-blue-0d xl:py-14 py-10">
        <div class="grid xl:grid-cols-2 grid-cols-1 gap-6 container-main">
            <?php if ($condition) : ?>
                <div class="flex flex-col justify-center xl:gap-14 gap-6">
                    <?php if (get_the_title()) : ?>
                        <h1 class="text-red font-extrabold xl:text-[30px] text-xl xl:leading-[39px] leading-[26px] uppercase">
                            <?= $sentence_without_last_word; ?>

                            <span class="block font-black xl:text-7xl text-4xl xl:leading-[93.6px] leading-[46.8px] text-white lowercase first-letter:uppercase">
                                <?= $last_word; ?>
                            </span>
                        </h1>
                    <?php endif; ?>

                    <?php if (get_the_content()) : ?>
                        <div class="list">
                            <?php the_content(); ?>
                        </div>
                    <?php endif; ?>

                    <a class="main-btn blue" href="<?= Help::getLinkPageById(SHOP_ID_PAGE); ?>">
                        Оформить заказ
                    </a>
                </div>
            <?php endif; ?>

            <?php if (has_post_thumbnail()) : ?>
                <div class="xl:h-[688px] flex justify-center items-center">
                    <?php the_post_thumbnail("full", [
                        "class" => "h-full w-full object-contain group-hover:scale-95",
                    ]); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>