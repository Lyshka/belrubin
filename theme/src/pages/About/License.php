<?php
$license = get_field("license");

if ($license) :
    $desc = $license["desc"];
    $gallery = $license["gallery"];
?>
    <section>
        <h3 class="title-main">Лицензии и сертификаты</h3>

        <?php if ($desc || $gallery) : ?>
            <div class="xl:space-y-10 space-y-5">
                <?php if ($desc) : ?>
                    <div class="font-medium text-base leading-[20.8px] space-y-2.5">
                        <?= $desc; ?>
                    </div>
                <?php endif; ?>

                <?php if ($gallery) : ?>
                    <ul class="grid md:grid-cols-4 grid-cols-2 md:gap-x-6 gap-x-2 md:gap-y-6 gap-y-5">
                        <?php
                        foreach ($gallery as $imgId) :
                            $img = wp_get_attachment_image($imgId, "medium", false, [
                                "class" => "h-full w-full object-contain group-hover:scale-95",
                            ]);
                            $imgUrl = wp_get_attachment_image_url($imgId, "full");
                        ?>
                            <li>
                                <button data-url="<?= $imgUrl; ?>" class="openLightBoxImg w-full xl:h-[389px] h-[230px] group">
                                    <?= $img; ?>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>