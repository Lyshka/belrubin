<?php

function VideoCustom($url)
{
?>
    <div class="relative w-full h-full videoCustom">
        <video class="w-full h-full object-cover">
            <source src="<?php echo $url; ?>" />
        </video>

        <button class="absolute inset-0 flex justify-center items-center">
            <svg class="xl:w-20 w-16 xl:h-20 h-16" viewBox="0 0 60 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M60 35L-3.26266e-06 69.641L-2.34249e-07 0.358979L60 35Z" fill="white" />
            </svg>
        </button>
    </div>
<?php
}
