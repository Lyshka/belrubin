<?php
$business_development = get_field("business_development");

if ($business_development) :
    $first_col = $business_development["first_col"];
    $second_col = $business_development["second_col"];
?>
    <section class="xl:space-y-11 space-y-5">
        <h4 class="font-black xl:text-2xl text-lg xl:leading-[31.2px] leading-[23.4px]">Развитие пиротехнического бизнеса</h4>

        <ul class="grid xl:grid-cols-2 grid-cols-1 xl:gap-6 gap-5 font-medium text-base leading-[20.8px]">
            <?php if ($first_col) : ?>
                <li>
                    <?= $first_col; ?>
                </li>
            <?php endif; ?>

            <?php if ($second_col) : ?>
                <li>
                    <?= $second_col; ?>
                </li>
            <?php endif; ?>
        </ul>
    </section>
<?php endif; ?>