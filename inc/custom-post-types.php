<?php
/**
 * Custom Post Types & Taxonomies
 *
 * @package PCAmobile
 */

defined('ABSPATH') || exit;

/**
 * Register Custom Post Type: Referenzen (Testimonials/Case Studies)
 */
function pcamobile_register_cpts() {
    register_post_type('referenz', [
        'labels' => [
            'name'               => __('Referenzen', 'pcamobile'),
            'singular_name'      => __('Referenz', 'pcamobile'),
            'add_new'            => __('Neue Referenz', 'pcamobile'),
            'add_new_item'       => __('Neue Referenz hinzufügen', 'pcamobile'),
            'edit_item'          => __('Referenz bearbeiten', 'pcamobile'),
            'all_items'          => __('Alle Referenzen', 'pcamobile'),
            'search_items'       => __('Referenzen durchsuchen', 'pcamobile'),
            'not_found'          => __('Keine Referenzen gefunden', 'pcamobile'),
        ],
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'referenzen'],
        'menu_icon'    => 'dashicons-star-filled',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest' => true,
    ]);

    register_post_type('branche', [
        'labels' => [
            'name'               => __('Branchen', 'pcamobile'),
            'singular_name'      => __('Branche', 'pcamobile'),
            'add_new'            => __('Neue Branche', 'pcamobile'),
            'add_new_item'       => __('Neue Branche hinzufügen', 'pcamobile'),
            'edit_item'          => __('Branche bearbeiten', 'pcamobile'),
            'all_items'          => __('Alle Branchen', 'pcamobile'),
        ],
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'branchen'],
        'menu_icon'    => 'dashicons-building',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'pcamobile_register_cpts');
