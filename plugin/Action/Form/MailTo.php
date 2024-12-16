<?php

function mail_to()
{
    $tel = sanitize_text_field($_POST['tel']) ?? '';
    $name = sanitize_text_field($_POST['name']) ?? '';
    $currentUrl = esc_url($_POST['currentUrl']) ?? '';

    $to = get_option('admin_email');
    $subject = 'Новые данные от пользователя';

    $message = "URL: $currentUrl\nТелефон: $tel\n";

    if (!empty($name)) {
        $message .= "Имя: $name\n";
    }

    $headers = 'From: WordPress Site <noreply@example.com>' . "\r\n" .
        'Reply-To: noreply@example.com' . "\r\n" .
        'Content-Type: text/plain; charset=UTF-8';

    wp_mail($to, $subject, $message, $headers);
    wp_redirect(Help::getLinkPageById(THANK_ID_PAGE));
    wp_die();
}

add_action('wp_ajax_mail_to', 'mail_to');
add_action('wp_ajax_nopriv_mail_to', 'mail_to');
