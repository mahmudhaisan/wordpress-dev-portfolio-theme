<?php

define('TEMPLATES_DIRECTORY_PATH', get_template_directory_uri());
// const TEMPLATES_DIRECTORY_PATH = TEMPLATES_DIRECTORY_PATH;

function wpdp_theme_assets()
{

    load_theme_textdomain('wpdp_theme', TEMPLATES_DIRECTORY_PATH . '/languages');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails', array('post', 'portfolio'));

    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary', 'wpdp_theme'),
    ));

}
add_action('after_setup_theme', 'wpdp_theme_assets');

function wpdp_theme_css_js()
{

    // CSS Files
    wp_enqueue_style('fontawesome', TEMPLATES_DIRECTORY_PATH . '/assets/css/fontawesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('magnific-popup', TEMPLATES_DIRECTORY_PATH . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl-carousel', TEMPLATES_DIRECTORY_PATH . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', TEMPLATES_DIRECTORY_PATH . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', TEMPLATES_DIRECTORY_PATH . '/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive-style', TEMPLATES_DIRECTORY_PATH . '/assets/css/responsive.css', array(), '1.0.0', 'all');

    // JS Files
    wp_enqueue_script('easypiechart', TEMPLATES_DIRECTORY_PATH . '/assets/js/jquery.easypiechart.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magnific', TEMPLATES_DIRECTORY_PATH . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl-carousel', TEMPLATES_DIRECTORY_PATH . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap', TEMPLATES_DIRECTORY_PATH . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('gsap', TEMPLATES_DIRECTORY_PATH . '/assets/js/gsap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('ScrollToPlugin', TEMPLATES_DIRECTORY_PATH . '/assets/js/ScrollToPlugin.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('ScrollTrigger', TEMPLATES_DIRECTORY_PATH . '/assets/js/ScrollTrigger.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('ScrollSmoother', TEMPLATES_DIRECTORY_PATH . '/assets/js/ScrollSmoother.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('splittext', TEMPLATES_DIRECTORY_PATH . '/assets/js/splittext.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('appjs', TEMPLATES_DIRECTORY_PATH . '/assets/js/app.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wpdp_theme_css_js');

function wpdp_theme_portfolio_cpt()
{

    // portfolio Custom Post
    $labels = array(
        'name' => __('portfolio', 'portfolio to show', 'recipe'),
        'singular_name' => __('portfolio', 'Post type singular name', 'recipe'),
        'menu_name' => __('portfolio', 'Admin Menu text', 'recipe'),
        'not_found' => __('No portfolio Found', 'Admin Menu text', 'recipe'),
    );

    $args = array(
        'public' => true,
        'labels' => $labels,
        'label' => __('portfolio', 'lawenforce'),
        'show_in_rest' => false,
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'thumbnail', 'gallery'),
    );
    register_post_type('portfolio', $args);

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name' => _x('Categories', 'taxonomy general name', 'textdomain'),
        'singular_name' => _x('Category', 'taxonomy singular name', 'textdomain'),
        'search_items' => __('Search Categories', 'textdomain'),
        'all_items' => __('All Categories', 'textdomain'),
        'parent_item' => __('Parent Category', 'textdomain'),
        'parent_item_colon' => __('Parent Category:', 'textdomain'),
        'edit_item' => __('Edit Category', 'textdomain'),
        'update_item' => __('Update Category', 'textdomain'),
        'add_new_item' => __('Add New Category', 'textdomain'),
        'new_item_name' => __('New Category Name', 'textdomain'),
        'menu_name' => __('Category', 'textdomain'),
    );

    $cat_args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'category'),
    );

    register_taxonomy('portfolio_category', array('portfolio'), $cat_args);

    // skill Custom Post
    $skill_labels = array(
        'name' => __('skills', 'skill to show', 'recipe'),
        'singular_name' => __('skill', 'Post type singular name', 'recipe'),
        'menu_name' => __('skill', 'Admin Menu text', 'recipe'),
        'not_found' => __('No skill Found', 'Admin Menu text', 'recipe'),
    );

    $skill_args = array(
        'public' => true,
        'labels' => $skill_labels,
        'label' => __('skill', 'lawenforce'),
        'show_in_rest' => false,
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'thumbnail', 'gallery'),
    );

    register_post_type('skills', $skill_args);

    // services Custom Post
    $service_labels = array(
        'name' => __('services', 'service to show', 'recipe'),
        'singular_name' => __('service', 'Post type singular name', 'recipe'),
        'menu_name' => __('services', 'Admin Menu text', 'recipe'),
        'not_found' => __('No service Found', 'Admin Menu text', 'recipe'),
    );

    $service_args = array(
        'public' => true,
        'labels' => $service_labels,
        'label' => __('service', 'lawenforce'),
        'show_in_rest' => false,
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'thumbnail', 'gallery'),
    );

    register_post_type('services', $service_args);

// services Custom Post
    $counter_labels = array(
        'name' => __('counters', 'counter to show', 'recipe'),
        'singular_name' => __('counter', 'Post type singular name', 'recipe'),
        'menu_name' => __('counters', 'Admin Menu text', 'recipe'),
        'not_found' => __('No counter Found', 'Admin Menu text', 'recipe'),
    );

    $counter_args = array(
        'public' => true,
        'labels' => $counter_labels,
        'label' => __('counter', 'lawenforce'),
        'show_in_rest' => false,
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'thumbnail', 'gallery'),
    );

    register_post_type('counters', $counter_args);

}

add_action('init', 'wpdp_theme_portfolio_cpt');

require_once 'inc/cmb2/init.php';
require_once 'inc/cmb2/functions.php';
require_once 'inc/redux/redux-config.php';

add_action('cmb2_admin_init', 'cmb2_sample_metaboxes');
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes()
{

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box(array(
        'id' => 'test_metabox',
        'title' => __('Test Metabox', 'cmb2'),
        'object_types' => array('portfolio'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    // Regular text field
    $cmb->add_field(array(
        'name' => __('Portfolio Gallery', 'cmb2'),
        'desc' => __('add your portfolio galleries', 'cmb2'),
        'id' => 'portfolio-gallery',
        'type' => 'file_list',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ));

    // Add other metaboxes as needed

    /**
     * Initiate the metabox
     */
    $skill_box = new_cmb2_box(array(
        'id' => 'skill_metabox',
        'title' => __('Skills Metabox', 'cmb2'),
        'object_types' => array('skills'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    // Regular text field
    $skill_box->add_field(array(
        'name' => __('skill percentage', 'cmb2'),
        'desc' => __('add your skill percentage', 'cmb2'),
        'id' => 'skill-percentage',
        'type' => 'text_medium',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ));

    // Add other metaboxes as needed

    /**
     * Initiate the metabox
     */
    $service_box = new_cmb2_box(array(
        'id' => 'service_metabox',
        'title' => __('Services Metabox', 'cmb2'),
        'object_types' => array('services'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    // Regular text field
    $service_box->add_field(array(
        'name' => __('service image', 'cmb2'),
        'desc' => __('add your service image', 'cmb2'),
        'id' => 'service-image',
        'type' => 'file',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ));

    // Regular text field
    $service_box->add_field(array(
        'name' => __('service description', 'cmb2'),
        'desc' => __('add your service description', 'cmb2'),
        'id' => 'service-description',
        'type' => 'textarea_small',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ));

    // Add other metaboxes as needed

    /**
     * Initiate the metabox
     */
    $counter_box = new_cmb2_box(array(
        'id' => 'counter_metabox',
        'title' => __('Counters Metabox', 'cmb2'),
        'object_types' => array('counters'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    // Regular image field
    $counter_box->add_field(array(
        'name' => __('counter image', 'cmb2'),
        'desc' => __('add your counter image', 'cmb2'),
        'id' => 'counter-image',
        'type' => 'file',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ));

    // Regular text field
    $counter_box->add_field(array(
        'name' => __('Counter numbers', 'cmb2'),
        'desc' => __('add your counter number', 'cmb2'),
        'id' => 'counter-numbers',
        'type' => 'text_medium',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ));

}

function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
