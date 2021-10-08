<section class="block-employees" id="<?php echo $menu_id ?? ''; ?>">
    <div class="container-fluid">
        <div class="row">
            <?php
                while( have_rows('employees') ) : the_row();
                ?>
                    <div class="col-lg-3 col-12 blog mb-2">
                        <div class="card h-100">
                            <div class="card-body d-flex">
                                <div class="col-4">
                                    <div class="employee-image">
                                        <img src="<?php echo get_sub_field('picture')['url']; ?>" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="employee-info">
                                        <h2 class="m-0"><?php echo get_sub_field('name'); ?></h2>
                                        <span class="mt-1 mb-2 font-italic d-block"><?php echo get_sub_field('position'); ?></span>
                                        <?php echo get_sub_field('description'); ?>
                                    </div>
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