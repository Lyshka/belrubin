<?php
$img = wp_get_attachment_image(82, "large", false, [
    "class" => "h-full w-full object-cover",
]);
?>

<section class="relative">
    <div class="absolute inset-0">
        <?= $img; ?>
    </div>

    <div class="grid xl:grid-cols-2 grid-cols-1 xl:gap-6 gap-8 xl:px-10 px-2.5 py-10 relative z-[1]">
        <div>
            <h2 class="title-main text-white">Оставить заявку</h2>

            <p class="font-medium text-base leading-[20.8px] text-white">
                Заполните форму на сайте и отправьте заявку. Наши менеджеры свяжутся с вами и проконсультируют по всем вопросам, связанным с нашей пиротехнической продукцией
            </p>
        </div>

        <?php Form("formBlock"); ?>
    </div>
</section>