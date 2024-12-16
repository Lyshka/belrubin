<?php
global $site_setting;

$logos = $site_setting["logos"];
$headerLogoId = $logos["header"];
$headerLogo = wp_get_attachment_image($headerLogoId, "medium", false, [
    "class" => "h-full w-full object-contain group-hover:scale-95",
]);
?>

<header class="xl:py-5 py-3 bg-white shadow-header">
    <div class="container-main flex justify-between items-center">
        <a href="/" class="flex justify-center items-center w-[180px] h-[72px] group hover-opacity">
            <?= $headerLogo; ?>
        </a>

        <?php Help::theNav("xl:block hidden"); ?>

        <button id="handleMobileMenu" class="h-9 relative w-9 xl:hidden flex justify-center items-center handleMobileTelMenu">
            <svg class="burgerIcon" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 28.5H34.5M1.5 7.5H34.5M1.5 18H34.5" stroke="#0D199B" stroke-width="4" />
            </svg>

            <svg class="closeIcon" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 18L31 31M18 18L5 5M18 18L5 31M18 18L31 5" stroke="#0D199B" stroke-width="4" stroke-linecap="square" />
            </svg>
        </button>
    </div>
</header>