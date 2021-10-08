<section class="block-headline text-break">
    <?php $headline_block = explode(' ',get_sub_field('headline')); ?>
    <?php $first_part = $headline_block[0]; ?>
    <?php unset($headline_block[0]); $last_parts = implode(' ',$headline_block); ?>
    <div class="container mx-auto">
        <h2 class="text-3xl  font-bold mb-4 text-<?php echo get_sub_field('align');?>"><span class="text-blue font-WorkSans"><?php echo $first_part; ?></span> <?php echo $last_parts; ?></h2>
    </div>
</section>