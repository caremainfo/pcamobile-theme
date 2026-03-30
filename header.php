<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="icon" type="image/png" href="<?php echo esc_url(PCAMOBILE_URI . '/assets/images/logo/Favicon_New_300-80x80.png'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
    <div class="header__inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" aria-label="<?php bloginfo('name'); ?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <img src="<?php echo esc_url(PCAMOBILE_URI . '/assets/images/logo/pcamobile_nav.png'); ?>" alt="PCA Mobile" class="site-logo__img">
            <?php endif; ?>
        </a>

        <nav class="nav-menu" role="navigation" aria-label="Hauptnavigation">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'fallback_cb'    => 'pcamobile_fallback_menu',
                'depth'          => 1,
            ]);
            ?>
            <a href="#kontakt" class="btn btn-primary">Demo anfragen</a>
        </nav>

        <button class="nav-toggle" aria-label="Menü öffnen" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<?php
/**
 * Fallback menu if no menu is assigned
 */
function pcamobile_fallback_menu() {
    echo '<a href="' . esc_url(home_url('/plattform/')) . '">SERIWA</a>';
    echo '<a href="' . esc_url(home_url('/services/')) . '">Services</a>';
    echo '<a href="' . esc_url(home_url('/unternehmen/')) . '">Unternehmen</a>';
    echo '<a href="' . esc_url(home_url('/kontakt/')) . '">Kontakt</a>';
}
?>
