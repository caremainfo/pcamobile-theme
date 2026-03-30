<?php
/**
 * Template Name: Kontakt
 * Template: Kontakt-Seite
 *
 * @package PCAmobile
 */

get_header();
?>

<main id="main" role="main">

    <!-- Hero -->
    <?php get_template_part('template-parts/page-hero', null, [
        'title'    => 'Jede gute Beziehung beginnt mit dem Dialog.',
        'subtitle' => 'Ob Demo, Beratung oder konkretes Projekt — wir sind für Sie da.',
    ]); ?>

    <!-- Contact Form + Info -->
    <?php get_template_part('template-parts/contact-form'); ?>

    <!-- Google Maps -->
    <section class="section section--light" style="padding-top: 0;">
        <div class="container">
            <?php get_template_part('template-parts/google-map'); ?>
        </div>
    </section>

    <!-- Trial CTA -->
    <section class="trial-cta">
        <div class="container">
            <div class="trial-cta__inner fade-in">
                <div>
                    <h2>Heute bestellt. Morgen läuft's.</h2>
                    <p>Testen Sie SERIWA 30 Tage kostenlos — unverbindlich und ohne Risiko.</p>
                </div>
                <a href="mailto:kontakt@pcamobile.de?subject=Testzugang%20SERIWA" class="btn btn-primary">
                    Testzugang anfragen
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
