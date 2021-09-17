<?php 
function pokreni_se_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'pokreni_se' ),
) );
}
add_action('after_setup_theme','pokreni_se_theme_setup');


function set_excerpt_length() {
    return 75;
}
add_filter('excerpt_length','set_excerpt_length');

function sidebar() {
    register_sidebar(array (
        'name' => 'Sidebar-1',
        'id' => 'sidebar-1',
        'before_widget' => '<div class="widget p-5 mb-5">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
     register_sidebar(array (
        'name' => 'Sidebar-2',
        'id' => 'sidebar-2',
        'before_widget' => '<div class="widget p-5 mb-5">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'sidebar');