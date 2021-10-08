<section class="block-feature_boxes" id="<?php echo $menu_id ?? ''; ?>">
    <div class="container-fluid">
        <div class="row">
            <?php
            $counter = 0;
            $max = get_sub_field('row_count') ?? 3;
            while( have_rows('boxes') ) : the_row();
            $counter ++;
                ?>
                <div class="col-lg col-12 blog mb-2">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="icon mt-4 mb-4">
                                    <img src="<?php echo get_sub_field('picture')['url']; ?>" class="img-responsive">
                                </div>
                                <h2 class="mb-2 headline"><?php echo get_sub_field('headline'); ?></h2>
                                <?php echo get_sub_field('text'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($counter == $max): ?>
                    <?php $counter = 0; ?>
                    <div class="w-100"></div>
                <?php endif; ?>
            <?php
            endwhile;
            ?>
        </div>
    </div>
</section>