<section class="picture_and_text-block">
<?php $headline = explode(' ',get_sub_field('headline')); ?>
<?php $first_part = $headline[0]; ?>
<?php unset($headline[0]); $last_parts = implode(' ',$headline); ?>
<div class="">
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1 phone:col-span-2 big-phone:col-span-2">
            <img src="<?php echo get_sub_field('picture')['url']; ?>" class="w-full" />
        </div>
        <div class="col-span-1 phone:col-span-2 big-phone:col-span-2 text-right pr-24 pl-24 pt-12 phone:pt-0 phone:pr-4 phone:pl-4 big-phone:pt-0 big-phone:pr-4 big-phone:pl-4 phone:text-left big-phone:text-left">
            <h2 class="text-3xl  font-bold"><span class="text-blue font-WorkSans"><?php echo $first_part; ?></span> <?php echo $last_parts; ?></h2>
            <?php echo get_sub_field('text'); ?>
        </div>
    </div>
</div>    
</section>

