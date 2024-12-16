<?php
if (woocommerce_product_loop()) {
    woocommerce_product_loop_start();

    if (wc_get_loop_prop('total')) {
?>
        <ul class="grid xl:grid-cols-4 grid-cols-2 xl:gap-x-6 gap-x-2 xl:gap-y-9 gap-y-5">
            <?php
            while (have_posts()) {
                the_post();
                do_action('woocommerce_shop_loop');
                wc_get_template_part('content', 'product');
            }
            ?>
        </ul>
<?php
    }
    woocommerce_product_loop_end();
    do_action('woocommerce_after_shop_loop');
} else {
    require_once get_template_directory() . "/src/components/Additional/NotFound.php";
}
