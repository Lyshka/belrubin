<?php
$info = $args["info"];
$desc = esc_html($info["desc"]);

$imgId = $info["img"];
$img = wp_get_attachment_image($imgId, "large", false, [
    "class" => "h-full w-full object-cover group-hover:scale-110",
]);
$imgUrl = wp_get_attachment_image_url($imgId, "full");
?>

<li>
    <button data-url="<?= $imgUrl; ?>" class="openLightBoxImg w-full flex flex-col xl:gap-5 gap-2.5 text-left group font-black xl:text-2xl text-lg xl:leading-[31.2px] leading-[23.4px] hover:text-blue">
        <div class="xl:h-[397px] h-[220px] overflow-hidden w-full">
            <?= $img; ?>
        </div>

        <div>
            <?= $desc; ?>
        </div>
    </button>
</li>