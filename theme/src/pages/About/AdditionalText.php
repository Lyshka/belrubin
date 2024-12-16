<?php
$additional_text = get_field("additional_text");

if ($additional_text) :
    $title = $additional_text["title"];
    $desc = $additional_text["desc"];
?>
    <section class="grid xl:grid-cols-2 grid-cols-1 xl:gap-6 gap-8">
        <?php if ($title) : ?>
            <div class="font-black xl:text-2xl text-lg xl:leading-[31.2px] leading-[23.4px] space-y-2.5">
                <?= $title; ?>
            </div>
        <?php endif; ?>

        <?php if ($desc) : ?>
            <div class="font-medium text-base leading-[20.8px] space-y-2.5">
                <?= $desc; ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>