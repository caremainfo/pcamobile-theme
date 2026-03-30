<?php
/**
 * ACF Field Groups — Dokumentation & Registrierung
 *
 * Dieses File dokumentiert die empfohlenen ACF Field Groups
 * für das PCA Mobile Theme. Bei Installation von ACF Pro
 * können diese Felder im Admin-Bereich eingerichtet werden.
 *
 * BENÖTIGTE ACF FIELD GROUPS:
 *
 * ============================================
 * 1. OPTIONS PAGE: Allgemeine Einstellungen
 * ============================================
 * Location: Options Page "Theme-Einstellungen"
 *
 * Fields:
 * - client_logos (Repeater)
 *   - logo (Image, Return: Array)
 *   - company_name (Text)
 *   - website_url (URL)
 *
 * ============================================
 * 2. HERO SECTION (Front Page)
 * ============================================
 * Location: Page Template = front-page
 *
 * Fields:
 * - hero_headline (Text) — Default: "Enterprise Mobility. Neu gedacht."
 * - hero_subtitle (Textarea)
 * - hero_badge_text (Text) — Default: "Seit 20+ Jahren am Markt"
 * - hero_cta_primary_text (Text) — Default: "Demo anfragen"
 * - hero_cta_primary_link (URL)
 * - hero_cta_secondary_text (Text) — Default: "Plattform entdecken"
 * - hero_cta_secondary_link (URL)
 *
 * ============================================
 * 3. BRANCHEN (Post Type: branche)
 * ============================================
 * Location: Post Type = branche
 *
 * Fields:
 * - branche_icon (Text/Select) — Emoji oder Icon-Name
 * - branche_kurzbeschreibung (Textarea)
 * - branche_features (Repeater)
 *   - feature_title (Text)
 *   - feature_description (Textarea)
 *
 * ============================================
 * 4. REFERENZEN (Post Type: referenz)
 * ============================================
 * Location: Post Type = referenz
 *
 * Fields:
 * - referenz_firma (Text)
 * - referenz_branche (Taxonomy: branche)
 * - referenz_zitat (Textarea)
 * - referenz_person (Text)
 * - referenz_position (Text)
 *
 * @package PCAmobile
 */

defined('ABSPATH') || exit;

/**
 * Register ACF Options Page
 */
function pcamobile_acf_options() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'Theme-Einstellungen',
            'menu_title' => 'Theme-Einstellungen',
            'menu_slug'  => 'pcamobile-settings',
            'capability' => 'manage_options',
            'icon_url'   => 'dashicons-admin-customizer',
            'position'   => 59,
        ]);
    }
}
add_action('acf/init', 'pcamobile_acf_options');
