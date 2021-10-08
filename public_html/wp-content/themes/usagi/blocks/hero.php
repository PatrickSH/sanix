<?php $media = wp_is_mobile() && isset(get_sub_field('hero_media_handheld')['url']) ? get_sub_field('hero_media_handheld')['url'] : get_sub_field('picture')['url']; ?>
<section class="h-screen w-screen bg-no-repeat bg-center bg-cover relative"  style="background-image: url(<?php echo $media; ?>);">
    <div class="text-in-hero p-4">
        <h1 class="text-white text-5xl font-Mont mr-16 phone:mr-8 big-phone:mr-8 mt-12 text-right"><?php echo get_sub_field('headline'); ?></h1>
    </div>
    <div class="absolute bottom-32 mx-auto block left-0 right-0 w-6/12 phone:w-11/12 big-phone:w-11/12 tablet:w-8/12 hero-box p-8">
        <div class="grid grid-cols-3 gap-6">
            <?php while( have_rows('icon_boxes') ) : the_row(); ?>
            <div class="col-span-1 text-center">
                <div class="w-16 h-16 shadow rounded-full flex items-center p-4 block mx-auto bg-white">
                    <img src="<?php echo get_sub_field('picture')['url']; ?>" class="w-full">
                </div>
                <p class="text-black font-WorkSans font-medium mt-4"><?php echo get_sub_field('text'); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>