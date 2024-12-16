<?php if (have_rows("videos")) : ?>
    <ul class="xl:space-y-10 space-y-6">
        <?php
        while (have_rows("videos")) {
            the_row();
            $videoUrl = get_sub_field("video");
        ?>
            <div class="xl:h-[594px] h-[180px]">
                <?php VideoCustom($videoUrl); ?>
            </div>
        <?php
        }
        ?>
    </ul>
<?php endif; ?>