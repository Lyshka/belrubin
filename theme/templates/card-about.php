<?php
$index = $args["index"];
$info = $args["info"];

$isEven = $index % 2 === 0;

$title = esc_html($info["title"]);
$text = $info["text"];

$imgId = $info["img"];
$img = wp_get_attachment_image($imgId, "large", false, [
    "class" => "h-full w-full object-cover group-hover:scale-110",
]);
$imgUrl = wp_get_attachment_image_url($imgId, "full");
?>

<li class="grid xl:grid-cols-2 grid-cols-1 xl:gap-6 gap-5 group">
    <button data-url="<?= $imgUrl; ?>" class="openLightBoxImg xl:h-[550px] w-full overflow-hidden <?= $isEven ? "xl:order-first" : "xl:order-last"; ?>">
        <?= $img; ?>
    </button>

    <div class="flex flex-col xl:justify-center xl:gap-11 gap-5 h-full">
        <?php if ($title) : ?>
            <h4 class="font-black xl:text-2xl text-lg xl:leading-[31.2px] leading-[23.4px] group-hover:text-blue">
                <?= $title; ?>
            </h4>
        <?php endif; ?>

        <div class="font-medium text-base leading-[20.8px] space-y-2.5">
            <?= $text; ?>
        </div>

        <?php if (is_front_page() && $index === 0) : ?>
            <a class="main-btn red" href="<?= Help::getLinkPageById(ABOUT_ID_PAGE) ?>">Читать Подробнее</a>
        <?php endif; ?>
    </div>
</li>