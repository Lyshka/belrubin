<?php
$videoUrl = esc_url(get_field("video"));

if ($videoUrl) :
?>
    <section>
        <h3 class="title-main">Видеообзор</h3>

        <div class="xl:h-[594px] h-[180px]">
            <?php VideoCustom(url: $videoUrl); ?>
        </div>
    </section>
<?php endif; ?>