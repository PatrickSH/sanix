<section class="block-blog">
    <div class="container mx-auto">
        <div class="grid grid-cols-4 gap-8">
            <?php
            while( have_rows('blog_items') ) : the_row(); $blog = get_sub_field('blog_link')[0];
            ?>
                <div class="col-span-1 cursor-pointer">
                    <a href="<?php echo get_permalink($blog->ID); ?>" class="cursor-pointer h-full w-full">
                        <div class="w-full h-44 rounded shadow-lg  bg-no-repeat bg-center bg-cover " style="background-image: url('<?php echo get_sub_field('picture')['url']; ?>');"></div>
                        <div class="mt-4">
                            <h3 class="text-black font-bold text-xl"><?php echo $blog->post_title; ?></h3>
                            <p class="mt-2 text-sm text-black"><?php echo get_the_excerpt($blog->ID); ?></p>
                            <p class="mt-4 font-bold text-blue">Læs nu</p>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
