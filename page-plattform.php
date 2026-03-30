<?php
/**
 * Template Name: Plattform
 * Template: SERIWA Produktseite
 *
 * @package PCAmobile
 */

get_header();

$img = PCAMOBILE_URI . '/assets/images/products/';
?>

<main id="main" role="main">

    <!-- Hero -->
    <?php get_template_part('template-parts/page-hero', null, [
        'title'    => 'Die web-gestützte Softwarelösung für Ihre Serviceorganisation.',
        'subtitle' => 'Heute bestellt. Morgen läuft\'s.',
        'image'    => $img . 'Mac_Planung_Front_550.png',
    ]); ?>

    <!-- Performance Stats -->
    <section class="section section--light-alt stats stats--performance">
        <div class="container">
            <div class="stats__grid fade-in">
                <div class="stat-item">
                    <div class="stat-item__number" data-count="80" data-suffix="%">80%</div>
                    <div class="stat-item__label">Reduzierung Verwaltungsaufwand</div>
                </div>
                <div class="stat-item">
                    <div class="stat-item__number" data-count="21" data-suffix="%">21%</div>
                    <div class="stat-item__label">Mehr Serviceeinsätze</div>
                </div>
                <div class="stat-item">
                    <div class="stat-item__number" data-count="20" data-suffix="%">20%</div>
                    <div class="stat-item__label">Weniger Fahrzeit</div>
                </div>
                <div class="stat-item">
                    <div class="stat-item__number" data-count="38" data-suffix="%">38%</div>
                    <div class="stat-item__label">Weniger Folgeeinsätze</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Showcase -->
    <section class="section section--light" id="features">
        <div class="container">
            <div class="section__header fade-in">
                <h2>SERIWA im Detail.</h2>
                <p>Zwei Komponenten — eine Lösung: Leitstelle und App für nahtlose Zusammenarbeit zwischen Büro und Außendienst.</p>
            </div>

            <?php get_template_part('template-parts/feature-showcase', null, ['features' => [
                [
                    'title'       => 'Auftragsplanung',
                    'description' => 'Das grafische Planboard ermöglicht die intuitive Zuweisung von Aufträgen per Drag & Drop. Echtzeit-Statusanzeige und automatische Kapazitätsplanung.',
                    'image'       => $img . 'sldr_planung_4.png',
                    'items'       => [
                        'Grafisches Dispositionsboard',
                        'Echtzeit-Statusübersicht',
                        'Automatische Kapazitätsplanung',
                        'Drag & Drop Auftragsverteilung',
                    ],
                ],
                [
                    'title'       => 'Auftragsbearbeitung',
                    'description' => 'Mobile Techniker erhalten priorisierte Informationen, erfassen Daten vor Ort und schließen Aufträge mit digitaler Unterschrift ab.',
                    'image'       => $img . 'Auftragsuebersicht_Links_450.png',
                    'items'       => [
                        'Prioritätsgefilterter Auftragseingang',
                        'Fotodokumentation vor Ort',
                        'Digitale Kundenunterschrift',
                        'Sofortige ERP-Rückmeldung',
                    ],
                ],
                [
                    'title'       => 'Zeiterfassung',
                    'description' => 'Historische Daten ermöglichen präzise Zeitschätzungen. Projektbezogene Erfassung mit automatischer Zuordnung zu Verträgen und Abrechnungen.',
                    'image'       => $img . 'Arbeitszeiten.png',
                    'items'       => [
                        'Start/Stopp-Funktion',
                        'Automatische Auftragszuordnung',
                        'Export in Lohnbuchhaltung',
                        'Produktivitäts-Tracking',
                    ],
                ],
                [
                    'title'       => 'Formulare & Checklisten',
                    'description' => 'Dynamischer Formular-Editor mit logikbasierten Workflows. Checklisten passen sich automatisch an den Auftragstyp an.',
                    'image'       => $img . 'UFormulare-495x400.png',
                    'items'       => [
                        'Logikbasierter Formular-Editor',
                        'Kunden-Feedback-Integration',
                        'Adaptive Workflows',
                        'PDF-Export & Versand',
                    ],
                ],
                [
                    'title'       => 'Routenoptimierung',
                    'description' => 'Kosten-, zeit- und entfernungsoptimierte Tourenplanung unter Berücksichtigung von SLA-Anforderungen und Echtzeit-Verkehrsdaten.',
                    'icon_svg'    => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="10" r="3"/><path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 10-16 0c0 3 2.7 7 8 11.7z"/></svg>',
                    'items'       => [
                        'Kosten-/Zeit-/Streckenoptimierung',
                        'SLA-Berücksichtigung',
                        'Dynamische Umplanung',
                        'Echtzeit-Verkehrsdaten',
                    ],
                ],
                [
                    'title'       => 'Ersatzteilmanagement',
                    'description' => 'Mobile Bestandsverwaltung mit automatischen Warnungen bei Mindestmengenunterschreitung und Fahrzeug-übergreifenden Materialanfragen.',
                    'icon_svg'    => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><path d="M3.27 6.96L12 12.01l8.73-5.05"/><path d="M12 22.08V12"/></svg>',
                    'items'       => [
                        'Echtzeit-Bestandsübersicht',
                        'Automatische Nachbestellung',
                        'Fahrzeug-übergreifende Anfragen',
                        'Barcode-/QR-Code-Scanning',
                    ],
                ],
                [
                    'title'       => 'Analyse & Auswertung',
                    'description' => 'Konfigurierbare Reports und Dashboards für KPIs, SLA-Dokumentation und Produktivitätsanalysen.',
                    'icon_svg'    => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 20V10"/><path d="M12 20V4"/><path d="M6 20v-6"/></svg>',
                    'items'       => [
                        'Echtzeit-Dashboards',
                        'SLA-Dokumentation',
                        'Automatisierte Reports',
                        'Kundenportal-Integration',
                    ],
                ],
                [
                    'title'       => 'Kunden & Partner Integration',
                    'description' => 'Web-Aufnahmeformulare, Kundenportale und Self-Service-Terminbuchung — nahtlos in Ihre Serviceprozesse integriert.',
                    'icon_svg'    => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>',
                    'items'       => [
                        'Kundenportal',
                        'Online-Terminbuchung',
                        'Echtzeit-Benachrichtigungen',
                        'Partner-Schnittstellen',
                    ],
                ],
            ]]); ?>
        </div>
    </section>

    <!-- ERP Integration -->
    <section class="section section--dark">
        <div class="container">
            <div class="section__header fade-in">
                <h2>Nahtlose <span class="text-gradient">ERP-Integration.</span></h2>
                <p>Zertifizierte Schnittstellen zu führenden ERP-Systemen. Bidirektionaler Datenaustausch in Echtzeit.</p>
            </div>
            <?php get_template_part('template-parts/partners'); ?>
        </div>
    </section>

    <!-- CTA -->
    <?php get_template_part('template-parts/cta'); ?>

</main>

<?php
get_footer();
