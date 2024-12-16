<?php
function Conf($state = "")
{
    $privacyPolicyLink = get_the_privacy_policy_link();

    $isFormBlock = $state === "formBlock";
    $isOrder = $state === "order";
    $isQuest = $state === "quest";

    $textClass = match (true) {
        $isFormBlock || $isQuest => "text-white",
        $isOrder => "text-black",
        default => "",
    };
?>
    <label class="flex items-center gap-2.5 cursor-pointer confBlock">
        <div class="container-conf w-5 h-5 flex justify-center items-center flex-shrink-0 relative bg-white border border-gray-ba">
            <input required class="w-full h-full flex-shrink-0 opacity-0 absolute cursor-pointer" type="checkbox" name="conf" checked>

            <svg class="icon-checked transition-all duration-300 opacity-0 xl:w-5 w-7 xl:h-5 h-7" width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92085 10.1163L12.5434 3.5L13.8493 4.80591L5.92075 12.7344L2 8.81369L3.31377 7.50918L5.92085 10.1163Z" fill="#E51F1F" />
            </svg>
        </div>

        <p class="font-medium text-base leading-[20.8px] <?= $textClass; ?>">
            Ознакомлен(на) с <?= $privacyPolicyLink; ?>
        </p>
    </label>
<?php
}
?>