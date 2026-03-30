<?php
/**
 * Theme Support & Widget Areas
 *
 * @package PCAmobile
 */

defined('ABSPATH') || exit;

/**
 * Register Widget Areas
 */
function pcamobile_widgets_init() {
    register_sidebar([
        'name'          => __('Footer Widget', 'pcamobile'),
        'id'            => 'footer-widget',
        'description'   => __('Widget-Bereich im Footer.', 'pcamobile'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'pcamobile_widgets_init');

/**
 * Add preconnect for Google Fonts
 */
function pcamobile_resource_hints($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = [
            'href' => 'https://fonts.googleapis.com',
            'crossorigin' => true,
        ];
        $urls[] = [
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => true,
        ];
    }
    return $urls;
}
add_filter('wp_resource_hints', 'pcamobile_resource_hints', 10, 2);

/**
 * Remove WordPress emoji scripts (performance)
 */
function pcamobile_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'pcamobile_disable_emojis');

/**
 * Custom nav menu walker for simple link output
 */
class PCAmobile_Walker_Nav_Menu extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = implode(' ', $item->classes ?? []);
        $active  = in_array('current-menu-item', $item->classes ?? []) ? ' active' : '';

        $output .= sprintf(
            '<a href="%s" class="%s%s">%s</a>',
            esc_url($item->url),
            esc_attr(trim($classes)),
            $active,
            esc_html($item->title)
        );
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        // No closing tag needed
    }

    public function start_lvl(&$output, $depth = 0, $args = null) {
        // No nested lists
    }

    public function end_lvl(&$output, $depth = 0, $args = null) {
        // No nested lists
    }
}

/**
 * Use custom walker for primary menu
 */
function pcamobile_nav_menu_args($args) {
    if ($args['theme_location'] === 'primary') {
        $args['walker'] = new PCAmobile_Walker_Nav_Menu();
    }
    return $args;
}
add_filter('wp_nav_menu_args', 'pcamobile_nav_menu_args');
