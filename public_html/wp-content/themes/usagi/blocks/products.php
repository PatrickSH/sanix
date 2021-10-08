<section class="block-products" id="<?php echo $menu_id ?? ''; ?>">
    <div class="container-fluid">
        <div class="row">
            <?php
            while( have_rows('products') ) : the_row();
                ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="col-12">
                                <h2 class="mb-1 headline"><?php echo get_sub_field('headline'); ?></h2>
                                <span class="price"><?php echo get_sub_field('price'); ?> Kr</span>
                                <hr>
                                <?php echo get_sub_field('description'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
        </div>
    </div>
</section>