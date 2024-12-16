<?php

function Form($state)
{
?>
    <form method="post" action="<?= esc_url(admin_url('admin-ajax.php')); ?>" id="<?= $state ?>Form" class="xl:space-y-6 space-y-5 mainForm">
        <div class="space-y-2.5">
            <input required type="tel" name="tel" placeholder="Телефон*">
            <input type="text" name="name" placeholder="Ваше имя">
        </div>

        <?php Conf($state); ?>

        <button class="main-btn red">
            Оставить заявку
        </button>

        <input type="hidden" name="action" value="mail_to">
        <input type="hidden" name="currentUrl" value="<?= home_url($_SERVER['REQUEST_URI']); ?>">
    </form>
<?php
}
