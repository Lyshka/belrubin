<?php
global $product;

$isStock = $product->is_in_stock();
$salePrice = $product->get_sale_price();
$regularPrice = $product->get_regular_price();

$attributes = $product->get_attributes();

if (!empty($attributes) || $isStock) :
?>
    <ul id="productInfo">
        <?php if (!empty($attributes)) : ?>
            <li class="item xl:space-y-4 space-y-2.5">
                <h5>Характеристики</h5>

                <ul class="space-y-2">
                    <?php
                    foreach ($attributes as $attribute) :
                        $options = $attribute->get_options();
                        $terms = get_terms([
                            'taxonomy' => $attribute->get_name(),
                            'include' => $options,
                            'hide_empty' => false,
                        ]);

                        $term_names = wp_list_pluck($terms, 'name');
                    ?>
                        <li class="text-base leading-[20.8px] group gap-y-2 gap-x-6 grid grid-cols-2">
                            <p class="font-medium transition-all duration-300 group-hover:text-red">
                                <?= esc_html(wc_attribute_label($attribute->get_name())); ?>
                            </p>

                            <span class="font-semibold transition-all duration-300 group-hover:text-blue">
                                <?= esc_html(implode(', ', $term_names)); ?>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endif; ?>

        <li class="item flex items-center xl:gap-4 gap-10 xl:justify-start justify-between">
            <h5>Наличие в магазинах</h5>

            <div class="stock <?= $isStock ? "in" : "out"; ?>">
                <span>
                    <?= $isStock ? "В наличии" : "Нет в наличии"; ?>
                </span>

                <?php if ($isStock) : ?>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.8569 13.8245V15.0074C27.8553 17.7799 26.9575 20.4776 25.2974 22.6983C23.6374 24.9189 21.3039 26.5434 18.6452 27.3295C15.9864 28.1156 13.1448 28.0212 10.544 27.0604C7.94331 26.0996 5.72285 24.3238 4.21381 21.9979C2.70478 19.672 1.98802 16.9206 2.17045 14.154C2.35287 11.3875 3.4247 8.75406 5.22608 6.64645C7.02746 4.53884 9.46187 3.07 12.1662 2.45898C14.8706 1.84796 17.7001 2.12751 20.2326 3.25593M27.8569 5.35715L14.9997 18.2143L9.64258 12.8571" stroke="#06A56C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                <?php else: ?>
                    <svg width="30" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.5 9C19.1569 11.3431 15.5 15 15.5 15M9.5 21L15.5 15M15.5 15C15.5 15 11.8431 11.3431 9.5 9M15.5 15L21.5 21" stroke="#E61F1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="15.5" cy="15" r="13" stroke="#E61F1F" stroke-width="1.5" />
                    </svg>
                <?php endif; ?>
            </div>
        </li>

        <?php if ($isStock) : ?>
            <li class="item flex items-center gap-8 justify-between">
                <div class="flex flex-col">
                    <?php if ($salePrice) : ?>
                        <span class="font-extrabold text-sm leading-[18.2px] line-through text-gray-ba">
                            <?php echo wc_price($regularPrice); ?>
                        </span>
                    <?php endif ?>

                    <span class="font-black xl:text-2xl text-xl xl:leading-[31.2px] leading-[26px] text-red">
                        <?= $salePrice ? wc_price($salePrice) : wc_price($regularPrice); ?>
                    </span>
                </div>

                <button data-name-modal="order" class="handleModal main-btn blue">
                    Оставить заявку
                </button>
            </li>
        <?php endif; ?>
    </ul>
<?php endif; ?>