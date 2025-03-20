<?php
function my_custom_theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'my-custom-blog'),
    ));
    add_theme_support('post-thumbnails'); // Enables featured images
}
add_action('after_setup_theme', 'my_custom_theme_setup');
function my_custom_widgets() {
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'my_custom_widgets');
// function create_blog_post_type() {
//     register_post_type('blog', array(
//         'labels' => array(
//             'name' => __('Blog'),
//             'singular_name' => __('Blog Post')
//         ),
//         'public' => true,
//         'has_archive' => true,
//         'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments')
//     ));
// }
// add_action('init', 'create_blog_post_type');

function custom_property_post_type() {
    $args = array(
        'label'  => 'Property',
        'public' => true,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'property'),
    );
    register_post_type('property', $args);
}
add_action('init', 'custom_property_post_type');

function create_testimonial_post_type() {
    register_post_type('testimonial',
        array(
            'labels'      => array(
                'name'          => __('Testimonials'),
                'singular_name' => __('Testimonial'),
            ),
            'public'      => true,
            'has_archive' => false,
            'menu_icon'   => 'dashicons-testimonial',
            'supports'    => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_testimonial_post_type');


function custom_post_type_properties() {
    $labels = array(
        'name'          => 'Properties',
        'singular_name' => 'Property',
        'menu_name'     => 'Properties',
        'add_new'       => 'Add New Property',
        'add_new_item'  => 'Add New Property',
        'edit_item'     => 'Edit Property',
        'new_item'      => 'New Property',
        'view_item'     => 'View Property',
        'all_items'     => 'All Properties'
    );

    $args = array(
        'labels'       => $labels,
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-admin-home',
        'supports'     => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite'      => array('slug' => 'properties'),
    );

    register_post_type('property', $args);
}
add_action('init', 'custom_post_type_properties');




?>
