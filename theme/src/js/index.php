<?php
$PATH_FILE_JS = get_template_directory_uri() . '/src/js/';

// wp_enqueue_script('topCustom', "{$PATH_FILE_JS}topCustom.js", [], VERSION, true);
// wp_enqueue_script('sendTelegram', get_template_directory_uri() . '/src/js/sendTelegram.js', [], VERSION, true);

// wp_enqueue_script('getInputValue', "{$PATH_FILE_JS}getInputValue.js", [], VERSION, true);
// wp_enqueue_script('toastr', 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js', ["jquery"], VERSION, true);
// wp_enqueue_script('axios', 'https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js', [], VERSION, true);
// wp_enqueue_script('sendAction', "{$PATH_FILE_JS}sendAction.js", ["axios", "toastr"], VERSION, true);

wp_enqueue_script('mobileMenu', "{$PATH_FILE_JS}mobileMenu.js", [], VERSION, true);
wp_enqueue_script('imask', 'https://unpkg.com/imask@7.3.0/dist/imask.js', [], VERSION, true);
wp_enqueue_script('phoneMask', "{$PATH_FILE_JS}phoneMask.js", ["imask"], VERSION, true);

if (is_front_page() || is_page(CONTACT_ID_PAGE)) {
    wp_enqueue_script('city', "{$PATH_FILE_JS}city.js", [], VERSION, true);
}

if (is_page(GALLERY_ID_PAGE) || is_page(ABOUT_ID_PAGE) || is_front_page()) {
    wp_enqueue_script('lightBox', "{$PATH_FILE_JS}lightBox.js", [], VERSION, true);
}

if (is_page(ABOUT_ID_PAGE) || is_product()) {
    wp_enqueue_script('videoCustom', "{$PATH_FILE_JS}videoCustom.js", [], VERSION, true);
}

if (is_page(GALLERY_ID_PAGE) || is_page(ABOUT_ID_PAGE) || is_product() || is_front_page()) {
    wp_enqueue_script('modal', "{$PATH_FILE_JS}modal.js", [], VERSION, true);
}

if (is_product() || is_front_page()) {
    wp_enqueue_script('swipper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], VERSION, true);
}

if (is_product()) {
    wp_enqueue_script('productSlider', "{$PATH_FILE_JS}productSlider.js", ["swipper"], VERSION, true);
}

if (is_product_category()) {
    wp_enqueue_script('sort', "{$PATH_FILE_JS}sort.js", [], VERSION, true);
}

if (is_front_page()) {
    wp_enqueue_script('reviewSlider', "{$PATH_FILE_JS}reviewSlider.js", ["swipper"], VERSION, true);
}
