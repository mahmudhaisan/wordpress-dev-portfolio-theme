<?php
if (!class_exists('Redux')) {
    return;
}

$opt_name = 'redux_demo';

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'display_name' => $theme->get('Name'),
    'display_version' => $theme->get('Version'),
    'menu_title' => esc_html__('Theme Admin Panel', 'your-textdomain-here'),
    'customizer' => false,
);

Redux::set_args($opt_name, $args);

Redux::set_section($opt_name, array(
    'title' => esc_html__('Basic Field', 'your-textdomain-here'),
    'id' => 'basic',
    'desc' => esc_html__('Basic field with no subsections.', 'your-textdomain-here'),
    'icon' => 'el el-home',
    'fields' => array(
        array(
            'id' => 'hero-right-banner',
            'type' => 'media',
            'title' => esc_html__('Upload banner', 'your-textdomain-here'),
            'desc' => esc_html__('banner desc..', 'your-textdomain-here'),

        ),

    ),
));