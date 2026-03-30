<?php
/**
 * PCA Mobile Theme Functions
 *
 * @package PCAmobile
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

define('PCAMOBILE_VERSION', '1.0.0');
define('PCAMOBILE_DIR', get_template_directory());
define('PCAMOBILE_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function pcamobile_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
    add_theme_support('responsive-embeds');

    register_nav_menus([
        'primary'   => __('Hauptnavigation', 'pcamobile'),
        'footer'    => __('Footer Navigation', 'pcamobile'),
        'legal'     => __('Rechtliches', 'pcamobile'),
    ]);

    add_image_size('card-thumb', 400, 250, true);
    add_image_size('hero-bg', 1920, 1080, true);
}
add_action('after_setup_theme', 'pcamobile_setup');

/**
 * Enqueue Styles & Scripts
 */
function pcamobile_enqueue_assets() {
    // Google Fonts: Roboto + Open Sans
    wp_enqueue_style(
        'pcamobile-fonts',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Open+Sans:wght@400;600;700&display=swap',
        [],
        null
    );

    // Main Stylesheet
    wp_enqueue_style(
        'pcamobile-main',
        PCAMOBILE_URI . '/assets/css/main.css',
        ['pcamobile-fonts'],
        PCAMOBILE_VERSION
    );

    // Theme stylesheet (for WP recognition)
    wp_enqueue_style(
        'pcamobile-style',
        get_stylesheet_uri(),
        ['pcamobile-main'],
        PCAMOBILE_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'pcamobile-main',
        PCAMOBILE_URI . '/assets/js/main.js',
        [],
        PCAMOBILE_VERSION,
        true
    );

    // Localize script
    wp_localize_script('pcamobile-main', 'pcamobile', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('pcamobile_nonce'),
    ]);
}
add_action('wp_enqueue_scripts', 'pcamobile_enqueue_assets');

/**
 * Includes
 */
require_once PCAMOBILE_DIR . '/inc/theme-support.php';
require_once PCAMOBILE_DIR . '/inc/custom-post-types.php';

/**
 * Custom Excerpt Length
 */
function pcamobile_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'pcamobile_excerpt_length');

function pcamobile_excerpt_more($more) {
    return '&hellip;';
}
add_filter('excerpt_more', 'pcamobile_excerpt_more');

/**
 * Contact Form AJAX Handler
 */
function pcamobile_contact_form_handler() {
    check_ajax_referer('pcamobile_nonce', 'nonce');

    $name    = sanitize_text_field($_POST['name'] ?? '');
    $company = sanitize_text_field($_POST['company'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error(['message' => 'Bitte füllen Sie alle Pflichtfelder aus.']);
    }

    $to      = get_option('admin_email');
    $subject = sprintf('[PCA Mobile] Kontaktanfrage von %s', $name);
    $body    = sprintf(
        "Name: %s\nFirma: %s\nE-Mail: %s\n\nNachricht:\n%s",
        $name,
        $company,
        $email,
        $message
    );
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        sprintf('Reply-To: %s <%s>', $name, $email),
    ];

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success(['message' => 'Vielen Dank! Wir melden uns in Kürze bei Ihnen.']);
    } else {
        wp_send_json_error(['message' => 'Es gab ein Problem. Bitte versuchen Sie es erneut.']);
    }
}
add_action('wp_ajax_pcamobile_contact', 'pcamobile_contact_form_handler');
add_action('wp_ajax_nopriv_pcamobile_contact', 'pcamobile_contact_form_handler');
