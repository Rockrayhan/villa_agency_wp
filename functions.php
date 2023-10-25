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


// widgets
function ficonsu_sidebars() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar-1', 'ficonsu' ),
		'id'            => 'sidebar-1',
		'description'   => __( '', 'textdomain' ),
		 'before_widget' => '<div class="info-table">',
		 'after_widget'  => '</div>',
		// 'before_title'  => '<h2 class="widgettitle">',
		// 'after_title'   => '</div>',
	) );
    }
    add_action( 'widgets_init', 'ficonsu_sidebars' );

?>