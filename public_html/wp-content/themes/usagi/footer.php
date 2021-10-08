<?php wp_footer(); ?>
<?php $has_contact_info = !empty(get_theme_mod('cvr')) || !empty(get_theme_mod('phone')) || !empty(get_theme_mod('email')); ?>
<footer class="w-screen footer-shadow mt-20">
    <div class="w-full">
        <div class="container mx-auto">
            <div class="grid grid-cols-10 items-center pt-8">
                <div class="col-span-3">
                    <?php echo get_custom_logo(); ?>
                </div>
                <div class="col-span-7 flex items-center justify-end">
                    <img src="<?php echo get_theme_root_uri(); ?>/usagi/assets/img/twitter.svg" />
                    <img src="<?php echo get_theme_root_uri(); ?>/usagi/assets/img/fb.svg" class="ml-3 mr-2" />
                    <img src="<?php echo get_theme_root_uri(); ?>/usagi/assets/img/tiktok.svg" class="ml-2 mr-2"  />
                    <img src="<?php echo get_theme_root_uri(); ?>/usagi/assets/img/insta.svg" />
                </div>
            </div>
            <?php if(!empty(getMenu('usagi-footer-menu'))): ?>
                <ul class="flex justify-end items-center mt-4 pb-8">
                    <?php foreach (getMenu('usagi-footer-menu') as $menu_item): ?>
                        <li class="text-grey ml-12 text-md font-Mont"><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</footer>
</body>
</html>
