<?php
$info = $args["info"];
$fio = esc_html($info["fio"]);
$date = esc_html($info["date"]);
$desc = $info["desc"];
?>

<li class="swiper-slide">
    <div class="border border-gray-e7 bg-white xl:p-5 p-2.5 flex flex-col justify-between gap-5 hover:shadow-2xl hover:border-red group/item transition-all duration-300 xl:h-full">
        <div class="font-medium text-base leading-[20.8px] space-y-2.5">
            <?= $desc; ?>
        </div>

        <div class="flex items-center xl:gap-[50px] gap-12 xl:justify-start justify-between">
            <p class="font-bold xl:text-2xl text-lg xl:leading-[31.2px] leading-[23.4px] transition-all duration-300 group-hover/item:text-blue">
                <?= $fio; ?>
            </p>

            <time class="flex-shrink-0 font-medium xl:text-base text-sm xl:leading-[20.8px] leading-[18.2px] text-red">
                <?= $date; ?>
            </time>
        </div>
    </div>
</li>