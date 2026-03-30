<?php
/**
 * Template Name: Services
 * Template: Services-Seite
 *
 * @package PCAmobile
 */

get_header();
?>

<main id="main" role="main">

    <!-- Hero -->
    <?php get_template_part('template-parts/page-hero', null, [
        'title'    => 'Unsere Services.',
        'subtitle' => 'Innovativ. Integrativ. Intuitiv. Smart. — Von der Beratung bis zum laufenden Betrieb.',
    ]); ?>

    <!-- Service Cards Overview -->
    <section class="section section--light">
        <div class="container">
            <div class="solutions__grid" style="grid-template-columns: repeat(2, 1fr);">
                <div class="solution-card fade-in" style="background: #fff; border-color: rgba(0,0,0,0.06);">
                    <div class="solution-card__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
                    </div>
                    <h3 style="color: var(--color-text-dark);">Consulting</h3>
                    <p style="color: var(--color-text-dark-muted);">Workflow-Entwicklung, Technologiemigration und Systemintegration. Wir analysieren Ihre Prozesse und entwickeln maßgeschneiderte Digitalisierungsstrategien.</p>
                </div>

                <div class="solution-card fade-in" style="background: #fff; border-color: rgba(0,0,0,0.06);">
                    <div class="solution-card__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                    </div>
                    <h3 style="color: var(--color-text-dark);">Enterprise Mobility Management</h3>
                    <p style="color: var(--color-text-dark-muted);">Geräteverwaltung (MDM), Konfiguration und Sicherheitsprotokolle für Ihren mobilen Außendienst. Zentrale Steuerung aller Endgeräte.</p>
                </div>

                <div class="solution-card fade-in" style="background: #fff; border-color: rgba(0,0,0,0.06);">
                    <div class="solution-card__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
                    </div>
                    <h3 style="color: var(--color-text-dark);">Hardware as a Service</h3>
                    <p style="color: var(--color-text-dark-muted);">Monatliches Mietmodell inklusive MDM, SLA-Abdeckung und Geräte-Tauschpool. Regelmäßige Upgrades und keine Investitionskosten.</p>
                </div>

                <div class="solution-card fade-in" style="background: #fff; border-color: rgba(0,0,0,0.06);">
                    <div class="solution-card__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
                    </div>
                    <h3 style="color: var(--color-text-dark);">Hardware</h3>
                    <p style="color: var(--color-text-dark-muted);">Beschaffung, Staging und Rollout robuster Industriegeräte. Wir liefern die passende Hardware für jeden Einsatzbereich.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Details -->
    <section class="section section--dark">
        <div class="container">
            <div class="section__header fade-in">
                <h2>Von der Beratung bis zum <span class="text-gradient">laufenden Betrieb.</span></h2>
                <p>Unser Full-Service-Ansatz begleitet Sie durch den gesamten Lebenszyklus Ihrer mobilen Lösung.</p>
            </div>

            <div class="service-detail__list fade-in">
                <div class="service-detail__item">
                    <div class="service-detail__item-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                    </div>
                    <div>
                        <strong style="color: #fff;">Analyse & Konzeption</strong>
                        <p style="color: var(--color-text-muted); margin: 0.25rem 0 0; font-size: 0.9375rem;">Wir analysieren Ihre bestehenden Geschäftsprozesse, identifizieren Optimierungspotenziale und entwickeln eine Roadmap für die Digitalisierung.</p>
                    </div>
                </div>

                <div class="service-detail__item">
                    <div class="service-detail__item-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
                    </div>
                    <div>
                        <strong style="color: #fff;">Konfiguration & Integration</strong>
                        <p style="color: var(--color-text-muted); margin: 0.25rem 0 0; font-size: 0.9375rem;">SERIWA wird an Ihre spezifischen Anforderungen angepasst und nahtlos in Ihre ERP-Landschaft (SAP, Dynamics, Sage u.a.) integriert.</p>
                    </div>
                </div>

                <div class="service-detail__item">
                    <div class="service-detail__item-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
                    </div>
                    <div>
                        <strong style="color: #fff;">Hardware-Bereitstellung</strong>
                        <p style="color: var(--color-text-muted); margin: 0.25rem 0 0; font-size: 0.9375rem;">Auswahl, Beschaffung und Konfiguration robuster Endgeräte. Staging, Rollout und MDM-Einrichtung aus einer Hand.</p>
                    </div>
                </div>

                <div class="service-detail__item">
                    <div class="service-detail__item-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    </div>
                    <div>
                        <strong style="color: #fff;">Schulung & Go-Live</strong>
                        <p style="color: var(--color-text-muted); margin: 0.25rem 0 0; font-size: 0.9375rem;">Umfassende Schulungen für Disponenten und Techniker. Begleiteter Go-Live mit persönlichem Ansprechpartner.</p>
                    </div>
                </div>

                <div class="service-detail__item">
                    <div class="service-detail__item-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <div>
                        <strong style="color: #fff;">Betrieb & Support</strong>
                        <p style="color: var(--color-text-muted); margin: 0.25rem 0 0; font-size: 0.9375rem;">99,95% Verfügbarkeit, redundante Systeme, regelmäßiges Monitoring und Patch-Management. SLA-basierter Support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php get_template_part('template-parts/cta'); ?>

</main>

<?php
get_footer();
