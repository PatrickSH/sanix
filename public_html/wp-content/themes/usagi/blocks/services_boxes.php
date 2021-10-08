<section class="services_boxes-block">
    <?php $headline = explode(' ',get_sub_field('headline')); ?>
    <?php $first_part = $headline[0]; ?>
    <?php unset($headline[0]); $last_parts = implode(' ',$headline); ?>
    <div class="container mx-auto">
        <h2 class="text-3xl  font-bold mb-4"><span class="text-blue font-WorkSans"><?php echo $first_part; ?></span> <?php echo $last_parts; ?></h2>

        <div class="grid grid-cols-4 gap-8">
            <?php while( have_rows('boxes') ) : the_row(); ?>
                <?php $sub_headline = explode(' ',get_sub_field('headline')); ?>
                <?php $sub_first_part = $sub_headline[0]; ?>
                <?php unset($sub_headline[0]); $sub_last_parts = implode(' ',$sub_headline); ?>
                <div class="col-span-1 text-center bg-white rounded-lg big-shadow text-center">
                    <img src="<?php echo get_sub_field('picture')['url']; ?>" class="w-20 text-center block mx-auto mt-8 mb-2">
                    <p class="text-black text-2xl font-WorkSans font-medium mb-8"><span class="text-blue font-WorkSans"><br><?php echo $sub_first_part; ?></span><br><?php echo $sub_last_parts; ?></p>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="grid grid-cols-4 gap-8 mt-16">
            <?php while( have_rows('boxes') ) : the_row(); ?>
                <div class="col-span-1 text-center text-sm">
                    <?php echo get_sub_field('text'); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

