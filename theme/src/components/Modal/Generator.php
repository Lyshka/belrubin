<?php
function Modal($state)
{
    $theme_path_modal = get_template_directory() . "/src/components/Modal/";
?>
    <section id="<?php echo $state; ?>Modal" class="modal">
        <button class="closeModal">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.99988 4.99991L30.9999 30.9999M4.99988 30.9999L30.9999 4.99991" stroke="black" stroke-width="4" />
            </svg>
        </button>

        <div class="content flex justify-center items-center w-fit">
            <div class="bg-white shadow-2xl xl:px-28 px-2.5 xl:py-10 py-5 max-h-[80vh] overflow-y-auto min-scroll">
                <?php
                if ($state === "order") {
                    require "{$theme_path_modal}Order.php";
                }
                ?>
            </div>
        </div>
    </section>
<?php
}
