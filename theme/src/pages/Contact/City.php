<?php
global $site_setting;

$city = $site_setting["city"];
?>

<section id="cityContact" class="grid xl:grid-cols-2 grid-cols-1 gap-6">
    <ul class="xl:space-y-11 space-y-6 addressList">
        <?php
        foreach ($city as $info) :
            $info = $info["info"];
            $name_city = esc_html($info["name_city"]);
            $addresses = $info["addresses"];
        ?>
            <li class="group xl:space-y-6 space-y-5">
                <h2 class="font-extrabold text-[28px] leading-[36.4px] uppercase text-red group-hover:text-blue">
                    <?= $name_city; ?>
                </h2>

                <ul class="xl:space-y-6 space-y-5">
                    <?php
                    foreach ($addresses as $info) :
                        $info = $info = $info["info"];
                        $address = esc_html($info["address"]);
                        $email = esc_html($info["email"]);
                        $sellers = $info["sellers"];
                    ?>
                        <li class="flex flex-col gap-3.5">
                            <button class="w-full text-left group/select">
                                <address class="font-black text-base leading-[20.8px] text-blue-0d transition-all duration-300 group-hover/select:text-red">
                                    <?= $address; ?>
                                </address>
                            </button>

                            <a class="font-semibold text-base leading-[20.8px] hover:text-blue" href="mailto:<?= $email; ?>">
                                <?= $email; ?>
                            </a>

                            <ul class="space-y-3.5">
                                <?php
                                foreach ($sellers as $info) :
                                    $info = $info["info"];
                                    $name = esc_html($info["name"]);
                                    $tels = $info["tels"];
                                ?>
                                    <li class="flex gap-3 items-center flex-wrap">
                                        <ul class="flex items-center gap-3">
                                            <?php
                                            foreach ($tels as $tel) :
                                                $tel = esc_html($tel["tel"]);
                                            ?>
                                                <li>
                                                    <a class="font-black text-base leading-[20.8px] hover:text-red" href="tel:<?= Help::getNumber($tel); ?>">
                                                        <?= $tel; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>

                                        <span class="font-semibold text-base leading-[20.8px] flex-shrink-0">
                                            <?= $name; ?>
                                        </span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>

    <ul class="mapList">
        <?php
        $i = 0;
        foreach ($city as $info) :
            $info = $info["info"];
            $name_city = esc_html($info["name_city"]);
            $addresses = $info["addresses"];

            $j = 0;
            foreach ($addresses as $info) :
                $info = $info = $info["info"];
                $code_map = $info["code_map"];

                $isFirst = $i === 0 && $j === 0;
        ?>
                <li class="<?= $isFirst ? "visible" : ""; ?>">
                    <?= $code_map; ?>
                </li>
        <?php
                $j++;
            endforeach;
            $i++;
        endforeach;
        ?>
    </ul>
</section>