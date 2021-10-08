<section class="testimonials-block" id="<?php echo $menu_id ?? ''; ?>">
    <div class="container-fluid">
            <div class="row d-flex justify-content-center position-relative testimonial-card-row align-items-center">
                <?php
                $i = 0;
                while( have_rows('testimonials') ) : the_row();
                $i++;
                ?>
                    <div class="card position-absolute shadow testimonial-card <?php echo ($i > 1 ? 'opacity-0' : ''); ?>">
                        <div class="card-body d-flex justify-content-center testimonial-card-body flex-column align-items-center">
                            <div class="testimonial-picture shadow">
                                <img src="<?php echo get_sub_field('testimonial_person_picture')['url']; ?>" class="img-responsive">
                            </div>
                            <div class="d-flex justify-content-between w-100">
                                <img src="<?php echo get_theme_file_uri( '/assets/icon-kit/arrow-left.png' ); ?>" class="prev" />
                                <img src="<?php echo get_theme_file_uri( '/assets/icon-kit/arrow-right.png' ); ?>" class="next" />
                            </div>
                            <div class="testimonial">
                                <?php echo get_sub_field('description'); ?>
                            </div>
                            <div class="testimonial-info text-center">
                                <h4 class="mb-0"><?php echo get_sub_field('testimonial_name'); ?></h4>
                                <small><?php echo get_sub_field('testimonial_postion'); ?></small>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
    </div>
</section>

