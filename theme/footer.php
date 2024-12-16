<?php
global $site_setting;

$privacyPolicyLink = get_the_privacy_policy_link();
$currentYear = date("Y");

$logos = $site_setting["logos"];
$footerLogoId = $logos["footer"];
$footerLogo = wp_get_attachment_image($footerLogoId, "medium", false, [
    "class" => "h-full w-full object-contain group-hover:scale-95",
]);

$contact = $site_setting["contact"];
$email = esc_html($contact["email"]);

$social = $site_setting["social"];
$instagrams = $social["instagrams"];
?>
</div>

<?php
require_once get_template_directory() . "/src/components/Main/Down/index.php";
?>
</main>

<footer class="xl:mt-28 mt-14 bg-blue-06 xl:py-14 py-8 text-white">
    <div class="container-main flex flex-col xl:gap-11 gap-8 items-center">
        <div class="flex xl:justify-between xl:gap-0 gap-8 xl:flex-row flex-col w-full">
            <div class="flex flex-col xl:items-start items-center gap-6">
                <a class="flex justify-center items-center w-[242px] h-[100px] hover-opacity group" href="/">
                    <?= $footerLogo; ?>
                </a>

                <ul class="flex flex-col xl:items-start items-center gap-5 font-bold text-base leading-[20.8px] uppercase">
                    <?php foreach ($instagrams as $name) : $name = $name["name"]; ?>
                        <li>
                            <a target="_blank" class="flex gap-3 items-center group hover:text-red" href="https://www.instagram.com/<?= $name; ?>">
                                <svg class="flex-shrink-0 group-hover:opacity-75" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.00012207" width="40" height="40" rx="20" fill="url(#paint0_radial_119_13254)" />
                                    <path d="M20 11.8074C22.6506 11.8074 23.0121 11.8074 24.0964 11.8074C25.0602 11.8074 25.5422 12.0483 25.9036 12.1688C26.3855 12.4098 26.747 12.5302 27.1084 12.8917C27.4699 13.2531 27.7108 13.6146 27.8313 14.0965C27.9518 14.458 28.0723 14.9399 28.1928 15.9037C28.1928 16.9881 28.1928 17.229 28.1928 20.0001C28.1928 22.7712 28.1928 23.0122 28.1928 24.0965C28.1928 25.0604 27.9518 25.5423 27.8313 25.9037C27.5904 26.3857 27.4699 26.7471 27.1084 27.1086C26.747 27.47 26.3855 27.711 25.9036 27.8314C25.5422 27.9519 25.0602 28.0724 24.0964 28.1929C23.0121 28.1929 22.7711 28.1929 20 28.1929C17.2289 28.1929 16.988 28.1929 15.9036 28.1929C14.9398 28.1929 14.4578 27.9519 14.0964 27.8314C13.6145 27.5905 13.253 27.47 12.8916 27.1086C12.5301 26.7471 12.2892 26.3857 12.1687 25.9037C12.0482 25.5423 11.9277 25.0604 11.8072 24.0965C11.8072 23.0122 11.8072 22.7712 11.8072 20.0001C11.8072 17.229 11.8072 16.9881 11.8072 15.9037C11.8072 14.9399 12.0482 14.458 12.1687 14.0965C12.4096 13.6146 12.5301 13.2531 12.8916 12.8917C13.253 12.5302 13.6145 12.2893 14.0964 12.1688C14.4578 12.0483 14.9398 11.9278 15.9036 11.8074C16.988 11.8074 17.3494 11.8074 20 11.8074ZM20 10.0001C17.2289 10.0001 16.988 10.0001 15.9036 10.0001C14.8193 10.0001 14.0964 10.2411 13.494 10.4821C12.8916 10.723 12.2892 11.0845 11.6867 11.6869C11.0843 12.2893 10.8434 12.7712 10.4819 13.4941C10.241 14.0965 10.1205 14.8194 10 15.9037C10 16.9881 10 17.3495 10 20.0001C10 22.7712 10 23.0122 10 24.0965C10 25.1808 10.241 25.9037 10.4819 26.5061C10.7229 27.1086 11.0843 27.711 11.6867 28.3134C12.2892 28.9158 12.7711 29.1568 13.494 29.5182C14.0964 29.7592 14.8193 29.8796 15.9036 30.0001C16.988 30.0001 17.3494 30.0001 20 30.0001C22.6506 30.0001 23.0121 30.0001 24.0964 30.0001C25.1807 30.0001 25.9036 29.7592 26.506 29.5182C27.1084 29.2772 27.7108 28.9158 28.3133 28.3134C28.9157 27.711 29.1566 27.229 29.5181 26.5061C29.759 25.9037 29.8795 25.1808 30 24.0965C30 23.0122 30 22.6507 30 20.0001C30 17.3495 30 16.9881 30 15.9037C30 14.8194 29.759 14.0965 29.5181 13.4941C29.2771 12.8917 28.9157 12.2893 28.3133 11.6869C27.7108 11.0845 27.2289 10.8435 26.506 10.4821C25.9036 10.2411 25.1807 10.1206 24.0964 10.0001C23.0121 10.0001 22.7711 10.0001 20 10.0001Z" fill="white" />
                                    <path d="M20 14.8194C17.1084 14.8194 14.8193 17.1086 14.8193 20.0001C14.8193 22.8917 17.1084 25.1808 20 25.1808C22.8916 25.1808 25.1807 22.8917 25.1807 20.0001C25.1807 17.1086 22.8916 14.8194 20 14.8194ZM20 23.3736C18.1928 23.3736 16.6265 21.9278 16.6265 20.0001C16.6265 18.1929 18.0723 16.6266 20 16.6266C21.8072 16.6266 23.3735 18.0724 23.3735 20.0001C23.3735 21.8074 21.8072 23.3736 20 23.3736Z" fill="white" />
                                    <path d="M25.3012 15.9037C25.9666 15.9037 26.506 15.3643 26.506 14.6989C26.506 14.0335 25.9666 13.4941 25.3012 13.4941C24.6358 13.4941 24.0964 14.0335 24.0964 14.6989C24.0964 15.3643 24.6358 15.9037 25.3012 15.9037Z" fill="white" />
                                    <defs>
                                        <radialGradient id="paint0_radial_119_13254" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(40.8047 0.812623) scale(92.3719)">
                                            <stop stop-color="#F9ED32" />
                                            <stop offset="0.36" stop-color="#EE2A7B" />
                                            <stop offset="0.44" stop-color="#D22A8A" />
                                            <stop offset="0.6" stop-color="#8B2AB2" />
                                            <stop offset="0.83" stop-color="#1B2AF0" />
                                            <stop offset="0.88" stop-color="#002AFF" />
                                        </radialGradient>
                                    </defs>
                                </svg>

                                <?= $name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>

                    <li>
                        <a class="hover:text-red group flex items-center gap-2" href="maito:<?= $email; ?>">
                            <svg class="flex-shrink-0" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="group-hover:stroke-red" d="M1.83203 18.15H20.1654V4.40002H1.83203V18.15Z" stroke="#E4E6F2" stroke-width="1.5" stroke-linejoin="round" />
                                <path class="group-hover:stroke-red" d="M1.83203 4.40002L10.9987 11.275L20.1654 4.40002" stroke="#E4E6F2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <?= $email; ?>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="space-y-6">
                <h6 class="font-black xl:text-[30px] text-2xl xl:leading-[39px] leading-[31.2px]">Меню:</h6>

                <?php Help::theNav(); ?>
            </div>

            <div class="xl:max-w-[485px] w-full flex-shrink-0 xl:space-y-6 space-y-5">
                <h6 class="font-black xl:text-[30px] text-2xl xl:leading-[39px] leading-[31.2px] text-white">
                    Остались вопросы?
                </h6>

                <p class="font-medium text-base leading-[20.8px]">
                    Оставьте Ваш номер телефона и мы ответим на них
                </p>

                <?php require_once get_template_directory() . "/src/components/Form/Quest.php"; ?>
            </div>
        </div>

        <div class="font-medium text-sm leading-[18.2px] flex flex-col items-center gap-3.5">
            <?= $privacyPolicyLink; ?>

            <a href="https://artcly.by/" target="_blank" class="group">
                Создание сайта: <span class="group-hover:text-red transition-all duration-300">ArtCly.by</span>
            </a>
        </div>
    </div>
</footer>

<?php
if (is_page(GALLERY_ID_PAGE) || is_page(ABOUT_ID_PAGE) || is_front_page()) {
    require_once get_template_directory() . "/src/components/Additional/LightBox.php";
}

if (is_product()) {
    Modal("order");
}

wp_footer();
?>
</body>

</html>