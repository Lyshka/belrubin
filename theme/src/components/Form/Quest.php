<form id="questForm" method="post" class="xl:space-y-11 space-y-8" action="<?= esc_url(admin_url('admin-ajax.php')); ?>">
    <div class="xl:space-y-6 space-y-5">
        <input required type="tel" name="tel" placeholder="Телефон*">

        <?php Conf("quest"); ?>
    </div>

    <button type="submit" class="main-btn red">Оставить заявку</button>

    <input type="hidden" name="action" value="mail_to">
    <input type="hidden" name="currentUrl" value="<?= home_url($_SERVER['REQUEST_URI']); ?>">
</form>