<?php
$currentId = get_the_ID();
$terms = get_the_terms($currentId, 'product_cat');

if ($terms && !is_wp_error($terms)) {
    $term_id = $terms[0]->term_id;

    $query = new WP_Query([
        'post_type' => 'product',
        'posts_per_page' => 4,
        'post__not_in' => [$currentId],
        'tax_query' => [
            [
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => $term_id,
            ],
        ],
    ]);

    if ($query->have_posts()) {
?>
        <section>
            <h2 class="title-main">Рекомендуемые товары</h2>

            <ul class="grid md:grid-cols-4 grid-cols-2 md:gap-x-6 gap-x-2 md:gap-y-6 gap-y-5">
                <?php
                while ($query->have_posts()) {
                    $query->the_post();
                    wc_get_template_part('content', 'product');
                }
                ?>
            </ul>
        </section>
<?php
    }
    wp_reset_postdata();
}
