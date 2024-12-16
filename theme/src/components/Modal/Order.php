<?php
$title = match ($state) {
    "audit" => "Получить бесплатный аудит",
    "order" => "Заказать звонок",
    "exit" => "НЕ спешите уходить,<br>Получите БЕСПЛАТНЫЙ АУДИТ",
    "request" => "Оставить заявку",
};
?>

<div class="flex flex-col items-center xl:gap-11 gap-8 xl:max-w-[487px] w-full">
    <div class="flex flex-col items-center xl:gap-6 gap-5">
        <h6 class="title-main !m-0">
            Оставить заявку
        </h6>

        <p class="font-medium xl:text-base text-sm xl:leading-[20.8px] leading-[18.2px]">
            Оставьте заявку, и наши специалисты свяжутся с вами в ближайшее время, чтобы проконсультировать по вопросам приобретения пиротехнических изделий
        </p>
    </div>

    <?php Form("order"); ?>
</div>