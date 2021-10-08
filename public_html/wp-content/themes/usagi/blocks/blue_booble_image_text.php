<section class="relative mx-auto blue_booble_image_text">
    <div class="container mx-auto">
        <div class="grid grid-cols-2">
            <div class="col-span-2">
                <img src="<?php echo get_theme_root_uri(); ?>/usagi/assets/img/blue_boble.svg" class="phone:hidden big-phone:hidden absolute h-full z-minus-one bottom-0 w-4/12  left-0 top-0 text-center block mx-auto">
                <div class="left-12 bottom-1/3 absolute phone:hidden big-phone:hidden">
                    <p class="font-WorkSans text-white w-1/5"><?php echo get_sub_field('text'); ?></p>
                </div>
                <div class="computer:hidden big-computer:hidden left-3 -bottom-4 absolute w-10/12 p-2 rounded shadow bg-blue">
                    <p class="font-WorkSans text-white text-xss w-full"><?php echo get_sub_field('text'); ?></p>
                </div>
                <img src="<?php echo get_sub_field('picture')['url']; ?>" class="w-9/12 phone:w-full big-phone:w-full z-20 ml-auto blue-image-border-radius text-center block">
            </div>
        </div>
    </div>
</section>
