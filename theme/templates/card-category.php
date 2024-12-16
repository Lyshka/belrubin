<?php
$category = $args["category"];

$thumbnailId = get_term_meta($category->term_id, 'thumbnail_id', true);
$categoryImage = wp_get_attachment_image($thumbnailId, "large", false, [
    "class" => "h-full w-full object-cover group-hover:scale-110",
]);
?>

<li>
    <a href="<?= esc_url(get_term_link($category)); ?>" class="group flex flex-col bg-blue-0d h-full">
        <div class="xl:h-[284px] h-[106px] overflow-hidden">
            <?= $categoryImage; ?>
        </div>

        <div class="xl:p-8 p-2.5 flex flex-col xl:gap-8 gap-2 items-center justify-between">
            <h3 class="font-black xl:text-2xl text-lg xl:leading-[31.2px] leading-[23.4px] text-center text-white xl:min-h-[62px] min-h-[69px] flex justify-center items-center">
                <?= esc_html($category->name); ?>
            </h3>

            <button class="main-btn blue !w-full group-hover:bg-red">
                Перейти в каталог
            </button>
        </div>
    </a>
</li>