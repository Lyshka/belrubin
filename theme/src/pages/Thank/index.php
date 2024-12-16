<section class="text-center flex flex-col items-center min-h-full justify-center">
    <h1 class="title-main">
        <?php the_title(); ?>
    </h1>

    <div class="flex flex-col items-center xl:gap-6 gap-4">
        <?php if (get_the_content()) : ?>
            <div class="space-y-2.5 font-light xl:text-lg text-base xl:leading-[21.09px] leading-[18.75px]">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>

        <a href="/" class="main-btn blue">
            Вернуться на главную
        </a>
    </div>
</section>