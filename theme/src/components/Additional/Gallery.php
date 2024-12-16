<?php
function Gallery($state)
{
    if ($state === "full") {
        $class = "xl:h-[448px] h-[260px]";
        $size = "full";
    }

    if ($state === "thumbnail") {
        $class = "xl:h-[142px] h-20";
        $size = "medium";
    }

    global $product;
    $product = wc_get_product($product);

    $thumbnail_id = $product->get_image_id();
    $img = wp_get_attachment_image($thumbnail_id, $size, false, [
        "class" => "h-full w-full object-cover group-hover:scale-110",
    ]);
    $gallery = $product->get_gallery_image_ids();
?>
    <div class="<?php echo "{$state}Slider"; ?> w-full relative">
        <ul class="swiper-wrapper">
            <li class="swiper-slide group">
                <div class="overflow-hidden <?php echo $class; ?>">
                    <?php echo $img; ?>
                </div>
            </li>

            <?php
            if (!empty($gallery)) {
                foreach ($gallery as $imgId) {
                    $img = wp_get_attachment_image($imgId, $size, false, [
                        "class" => "h-full w-full object-cover group-hover:scale-110",
                    ]);
            ?>
                    <li class="swiper-slide group">
                        <div class="overflow-hidden <?php echo $class; ?>">
                            <?php echo $img; ?>
                        </div>
                    </li>
            <?php
                }
            }
            ?>
        </ul>
    </div>
<?php
}
