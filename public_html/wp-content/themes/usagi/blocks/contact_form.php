<?php $headline_pic = explode(' ',get_sub_field('headline_in_pic')); ?>
<?php if (is_array($headline_pic)): ?>
    <?php $headline_pic_length = count($headline_pic); ?>
    <?php $last_part = $headline_pic[$headline_pic_length - 1]; ?>
    <?php unset($headline_pic[$headline_pic_length - 1]); $first_parts = implode(' ',$headline_pic); ?>
<?php endif; ?>
<section class="relative mx-auto contact_form">
    <div class="container mx-auto">
        <div class="grid grid-cols-2">
            <div class="col-span-1">
                <img src="<?php echo get_sub_field('picture')['url']; ?>" class="absolute max-h-full bottom-0 max-w-full left-0 top-0 text-center block mx-auto mt-8 mb-2">
                <div class="h-full w-full flex items-center">
                    <div class="left-12 bottom-24 absolute">
                        <h1 class="font-WorkSans text-3xl text-white font-bold"><?php echo $first_parts;?> <span class="text-black"><?php echo $last_part; ?></span></h1>
                        <p class="font-WorkSans text-white w-1/5"><?php echo get_sub_field('text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="bg-blue p-8 rounded-lg shadow-lg ml-auto w-8/12">
                    <h2 class="uppercase font-WorkSans text-white text-3xl font-bold"><?php echo get_sub_field('headline'); ?></h2>
                    <?php echo do_shortcode('[contact-form-7 id="'.get_sub_field('contact_form')[0].'"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
