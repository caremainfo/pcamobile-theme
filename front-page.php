<?php
/**
 * Template: Front Page (Startseite)
 *
 * @package PCAmobile
 */

get_header();
?>

<main id="main" role="main">
    <?php get_template_part('template-parts/hero'); ?>
    <?php get_template_part('template-parts/testimonials'); ?>
    <?php get_template_part('template-parts/services'); ?>

    <!-- Features Teaser (top 4) -->
    <section class="section section--light" id="plattform">
        <div class="container">
            <div class="section__header fade-in">
                <h2>Eine Plattform.<br><span class="text-gradient">Alle Prozesse.</span></h2>
                <p>SERIWA ist die modulare Enterprise-Mobility-Plattform, die sich exakt an Ihre Anforderungen anpasst.</p>
            </div>

            <div class="features__grid">
                <div class="feature-card fade-in">
                    <div class="feature-card__icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 14l2 2 4-4"/></svg>
                    </div>
                    <h3>Auftragsmanagement</h3>
                    <p>Aufträge mobil empfangen, bearbeiten und abschließen. Inklusive digitaler Unterschrift und Fotodokumentation.</p>
                </div>

                <div class="feature-card fade-in">
                    <div class="feature-card__icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="10" r="3"/><path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 10-16 0c0 3 2.7 7 8 11.7z"/></svg>
                    </div>
                    <h3>Routenplanung</h3>
                    <p>Intelligente Tourenoptimierung für kürzere Wege und mehr Termine pro Tag.</p>
                </div>

                <div class="feature-card fade-in">
                    <div class="feature-card__icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    </div>
                    <h3>Zeiterfassung</h3>
                    <p>Projektbezogene Zeiterfassung mit Start/Stopp-Funktion und automatischer Zuordnung zu Aufträgen.</p>
                </div>

                <div class="feature-card fade-in">
                    <div class="feature-card__icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8"/><path d="M12 17v4"/><path d="M7 8h5"/><path d="M7 12h10"/></svg>
                    </div>
                    <h3>ERP-Integration</h3>
                    <p>Zertifizierte Schnittstellen zu SAP, Microsoft Dynamics, Sage und weiteren ERP-Systemen.</p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 3rem;" class="fade-in">
                <a href="<?php echo esc_url(home_url('/plattform/')); ?>" class="btn btn-primary">
                    Alle Features entdecken
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/industries'); ?>
    <?php get_template_part('template-parts/stats'); ?>
    <?php get_template_part('template-parts/cta'); ?>
    <?php get_template_part('template-parts/news'); ?>

    <!-- Kontakt-Teaser -->
    <section class="section section--dark" id="kontakt">
        <div class="container">
            <div class="section__header fade-in">
                <h2>Sprechen Sie mit uns.</h2>
                <p>Ob Demo, Beratung oder konkretes Projekt — wir sind für Sie da.</p>
            </div>
            <div style="text-align: center;" class="fade-in">
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(home_url('/kontakt/')); ?>" class="btn btn-primary">
                        Kontakt aufnehmen
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
                    </a>
                    <a href="tel:+492119367906" class="btn btn-ghost">
                        +49 (0) 211 936 790 60
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
