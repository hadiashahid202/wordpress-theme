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
            'supports'    => array('title', 'editor'),
            'menu_icon'   => 'dashicons-testimonial', // WordPress icon
        )
    );
}
add_action('init', 'create_testimonial_post_type');


?>
