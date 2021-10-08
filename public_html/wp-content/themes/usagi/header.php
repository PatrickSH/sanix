<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://pages.swiftely.com
 *
 * @package Usagi
 * @subpackage Usagi
 * @since Usagi 1.0
 */
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,700&family=Work+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <?php wp_head(); ?>
    </head>
<body class="overflow-x-hidden">
<?php $output = getBlockOutput(); ?>
<?php global $html; ?>
<?php $html = $output['content']; ?>

<div class="w-screen h-20 menu-bar fixed-top-menu top-menu flex items-center">
    <div class="container mx-auto">
        <div class="grid grid-cols-10 items-center sticky-top pt-2 pb-2">
            <div class="col-span-2">
                <?php echo get_custom_logo(); ?>
            </div>
            <div class="col-span-8 relative phone:h-full big-phone:h-full">
                <div class="w-10 h-10 right-4 phone-burger computer:hidden big-computer:hidden ml-auto burger-menu fixed z-40 bg-white rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                    </svg>
                </div>

                <ul class="flex justify-end items-center main-menu phone:hidden big-phone:hidden
                big-phone:top-0 big-phone:bottom-0 big-phone:left-0 big-phone:right-0 big-phone:bg-blue big-phone:z-30
                big-phone:fixed big-phone:w-full big-phone:h-full big-phone:flex-col big-phone:justify-center

                phone:top-0 phone:bottom-0 phone:left-0 phone:right-0 phone:bg-blue phone:z-30
                phone:fixed phone:w-full phone:h-full phone:flex-col phone:justify-center">
                    <?php foreach (getMenu('usagi-top-menu') as $menu_item):?>
                        <li class="text-grey phone:text-white big-phone:text-white phone:ml-0 phone:mr-0 big-phone:ml-0 big-phone:mr-0 ml-4 mr-4 text-md font-Mont"><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
                    <?php endforeach; ?>
                    <li class="ml-8 phone:ml-0 phone:fixed phone:bottom-12 big-phone:ml-0 big-phone:fixed big-phone:bottom-12 font-Mont">
                        <a href="callto:" class="bg-blue phone:bg-white big-phone:bg-white phone:text-blue big-phone:text-blue rounded text-white shadow p-4 phone:left-0 phone:right-0 big-phone:left-0 big-phone:right-0">Ring til os nu</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

