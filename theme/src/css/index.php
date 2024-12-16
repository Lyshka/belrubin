<?php
wp_enqueue_style("tailwindGenerate", get_template_directory_uri() . '/src/css/tailwindGenerate.css', [], VERSION);
// wp_enqueue_style("toastr", 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css', [], VERSION);

if(is_product() || is_front_page()) {
    wp_enqueue_style("swipper", 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], VERSION);
}