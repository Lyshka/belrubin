<?php
function CurrencySymbol($symbol, $currency)
{
    if ($currency === 'BYN') {
        $symbol = 'руб';
    }
    return $symbol;
}
add_filter('woocommerce_currency_symbol', 'CurrencySymbol', 10, 2);
