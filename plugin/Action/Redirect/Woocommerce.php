<?php
if (isset($_GET['add-to-cart'])) {
    $cart_url = wc_get_cart_url();
    wp_redirect($cart_url);
}

if (is_cart() && WC()->cart->is_empty()) {
    wp_redirect(home_url('/'));
}
