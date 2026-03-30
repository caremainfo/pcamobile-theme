<?php
/**
 * Template Name: Unternehmen
 * Template: Unternehmens-Seite
 *
 * @package PCAmobile
 */

get_header();
?>

<main id="main" role="main">

    <!-- Hero -->
    <?php get_template_part('template-parts/page-hero', null, [
        'title'    => 'PCA Mobile GmbH',
        'subtitle' => 'Enterprise Mobility Solutions seit über 20 Jahren. Ihr Partner für digitale Prozesse im Außendienst.',
    ]); ?>

    <!-- Company Story -->
    <section class="section section--light">
        <div class="container">
            <div class="company-story fade-in">
                <p>PCA Mobile ist eines der führenden Unternehmen für Enterprise Mobility Solutions (EMS). Wir sind spezialisiert auf die Entwicklung und den Vertrieb mobiler Softwarelösungen für Logistik, Service und Außendienst.</p>
                <p>Mit SERIWA haben wir eine Field-Service-Software entwickelt, die die Vorteile von Individualentwicklung, Standardlösung und modularem Baukastensystem vereint. Die Funktionalität lässt sich ohne Programmierkenntnisse oder teure Berater erweitern — flexibel und zukunftssicher.</p>
                <p>Unser Pay-per-Use-Modell bedeutet: Sie zahlen nur für die Funktionen, die Sie tatsächlich nutzen. Cloud-optimiert als SaaS-Lösung, ohne Installations- und Wartungsaufwand, skalierbar mit Ihrem Wachstum.</p>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="section section--light-alt">
        <div class="container">
            <div class="section__header fade-in">
                <h2>Was uns <span class="text-gradient">auszeichnet.</span></h2>
            </div>

            <div class="values__grid">
                <div class="value-card fade-in">
                    <div class="value-card__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    </div>
                    <h3>Innovation</h3>
                    <p>Wir durchbrechen Technologiegrenzen und integrieren kontinuierlich Kundenfeedback in unsere Produktentwicklung.</p>
                </div>

                <div class="value-card fade-in">
                    <div class="value-card__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3>Zuverlässigkeit</h3>
                    <p>99,95% Systemverfügbarkeit, redundante Infrastruktur und kontinuierliches Security-Monitoring.</p>
                </div>

                <div class="value-card fade-in">
                    <div class="value-card__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9"/></svg>
                    </div>
                    <h3>Branchenkompetenz</h3>
                    <p>Tiefes Verständnis für die Anforderungen von über 12 Branchen — von Facility Management bis Windenergie.</p>
                </div>

                <div class="value-card fade-in">
                    <div class="value-card__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    </div>
                    <h3>Partnerschaft</h3>
                    <p>Langfristige Kundenbeziehungen statt kurzfristiger Projekte. 25% Kundenwachstum durch Empfehlung.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="section section--light stats">
        <div class="container">
            <div class="section__header fade-in">
                <h2>Zahlen, die für sich sprechen.</h2>
            </div>
            <div class="stats__grid fade-in">
                <div class="stat-item">
                    <div class="stat-item__number" data-count="20" data-suffix="+">20+</div>
                    <div class="stat-item__label">Jahre Erfahrung</div>
                </div>
                <div class="stat-item">
                    <div class="stat-item__number" data-count="500" data-suffix="+">500+</div>
                    <div class="stat-item__label">Implementierungen</div>
                </div>
                <div class="stat-item">
                    <div class="stat-item__number" data-count="99.95" data-suffix="%">99,95%</div>
                    <div class="stat-item__label">Verfügbarkeit</div>
                </div>
                <div class="stat-item">
                    <div class="stat-item__number" data-count="1.35" data-suffix=" Mio.">1,35 Mio.</div>
                    <div class="stat-item__label">Bearbeitete Aufträge</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries -->
    <section class="section section--dark" id="branchen">
        <div class="container">
            <div class="section__header fade-in">
                <h2>Maßgeschneidert für <span class="text-gradient">Ihre Branche.</span></h2>
                <p>Branchenspezifische Module und Workflows — vorkonfiguriert und sofort einsatzbereit.</p>
            </div>
            <?php
            // Inline industries grid (extended)
            $industries = [
                ['icon' => '🏢', 'name' => 'Facility Management'],
                ['icon' => '🚛', 'name' => 'Logistik'],
                ['icon' => '⚙️', 'name' => 'Maschinenbau'],
                ['icon' => '🛒', 'name' => 'Handel & E-Commerce'],
                ['icon' => '🏥', 'name' => 'Gesundheitswesen'],
                ['icon' => '🔌', 'name' => 'Installation & Elektro'],
                ['icon' => '🛡️', 'name' => 'Sicherheitsdienste'],
                ['icon' => '📡', 'name' => 'Telekommunikation'],
                ['icon' => '🔧', 'name' => 'Sanitärtechnik'],
                ['icon' => '🏗️', 'name' => 'Bauwesen'],
                ['icon' => '🌬️', 'name' => 'Windenergie'],
                ['icon' => '🏠', 'name' => 'Wohnungsabnahme'],
            ];
            ?>
            <div class="industries__grid">
                <?php foreach ($industries as $industry) : ?>
                    <div class="industry-card fade-in">
                        <span class="industry-card__icon"><?php echo $industry['icon']; ?></span>
                        <h3><?php echo esc_html($industry['name']); ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="section section--light-alt">
        <div class="container">
            <div class="section__header fade-in">
                <h2>Unsere Partner.</h2>
            </div>
            <?php get_template_part('template-parts/partners'); ?>
        </div>
    </section>

    <!-- CTA -->
    <?php get_template_part('template-parts/cta'); ?>

</main>

<?php
get_footer();
