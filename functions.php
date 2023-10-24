<?php 


function ficonsu_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    
    // for banner
    $args = array(
        'public' => true,
        'label'  => 'Banners',
        'supports' => array('title', 'thumbnail'),
    );
    register_post_type('banners', $args);

    // for nav menu
    register_nav_menus( array(
        'main_menu' => __( 'Main Menu', 'ficonsu' ),
        'top_menu'  => __( 'Top Menu', 'ficonsu' ),
        'footer_menu'  => __( 'Footer Menu', 'ficonsu' ),
    ) );

    // for info sidebar
    $args = array(
        'public' => true,
        'label'  => 'Sidebar Info',
        'supports' => array('title', 'thumbnail', 'editor'),
    );
    register_post_type('sidebar_info', $args);

    // for Feature sidebar
    $args = array(
        'public' => true,
        'label'  => 'featured section',
        'supports' => array('title', 'thumbnail', 'editor'),
    );
    register_post_type('featured_section', $args);

}

add_action('after_setup_theme' , 'ficonsu_setup');


?>