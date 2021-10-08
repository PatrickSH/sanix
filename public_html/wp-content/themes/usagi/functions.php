<?php
/**
 * Functions and definitions
 *
 * @link https://pages.swiftely.com
 *
 * @package Usagi
 * @subpackage Usagi
 * @since Usagi 1.0
 */

include 'core/acf.php';

/**
 * Enqueue scripts and styles.
 */
function scriptsAndStyles() {
    wp_enqueue_script( 'usagi-main-js', get_theme_file_uri( '/js/scripts.js' ), array('jquery'),'20181214', true );

    wp_enqueue_style( 'usagi-main-style', get_template_directory_uri().'/assets/css/main.css');
    wp_enqueue_style( 'usagi-extra-style', get_template_directory_uri().'/assets/css/extra.css');
}
add_action( 'wp_enqueue_scripts', 'scriptsAndStyles' );

if ( ! function_exists( 'usagiSetup' ) ) {
    function usagiSetup() {

        add_theme_support( 'title-tag' );
        add_theme_support(
            'custom-logo',
            array(
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

    }

    add_action( 'after_setup_theme', 'usagiSetup' );
}

remove_action('wp_head', 'wp_generator');


function usagiRegisterMenu() {
    register_nav_menu('usagi-top-menu',__( 'Top menu' ));
    register_nav_menu('usagi-footer-menu',__( 'Footer menu' ));
}

add_action( 'init', 'usagiRegisterMenu' );

/**
 * Hide editor on specific pages.
 *
 */
function hide_editor() {
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;

    remove_post_type_support('page', 'editor');
}
add_action( 'admin_init', 'hide_editor' );


/**
 * Adds a class to the a tags provided by wp_nav_menu();
 * @param $atts
 * @param $item
 * @param $args
 * @return mixed
 */
function addClassToMenuLink( $atts, $item, $args ) {
    $atts['class'] = "nav-link js-scroll-trigger";

    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'addClassToMenuLink', 1, 3 );

function getMenu($menu_name) {
    $menu_locations = get_nav_menu_locations();

    $menu_id = $menu_locations[$menu_name];
    return wp_get_nav_menu_items($menu_id);
}


function getBlockOutput()
{
    $html = "";
    if (have_rows('content')){

        while (have_rows('content')) {
            the_row();
            ob_start();
            $menu_id = get_row_layout() == 'swiftely_reservationwindow' ? 'booking' : sanitize_title(get_sub_field('menu_name'));
            include 'blocks/' . get_row_layout() . '.php';
            $html .= ob_get_clean();
        }
    }
    return ['content' => $html];

}

function addThemeSetting($key,$label,$wp_customize) {
    $wp_customize->add_setting( $key, array(
        'default' => '',
        'capability' => 'edit_theme_options'
    ) );

    $wp_customize->add_control( $key, array(
        'label' => $label,
        'section' => 'title_tagline',
        'type' => 'text'
    ) );
}

function addSocialMediaLinkSupport($wp_customize) {
    
    addThemeSetting('facebook_link','Facebook Link',$wp_customize);
    addThemeSetting('instagram_link','Instagram link',$wp_customize);

    addThemeSetting('cvr','CVR',$wp_customize);
    addThemeSetting('phone','Telefon',$wp_customize);
    addThemeSetting('email','E-mail',$wp_customize);
}
add_action('customize_register', 'addSocialMediaLinkSupport');

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function dd($data) {
    var_dump($data);die;
}