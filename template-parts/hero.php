<?php
/**
 * Template Part: Hero Section
 *
 * @package PCAmobile
 */
?>
<section class="hero hero--split section" id="hero">
    <canvas id="hero-noise" class="hero__shader"></canvas>
    <canvas id="hero-beams" class="hero__shader hero__shader--beams"></canvas>
    <div class="container">
        <div class="hero__content fade-in">
            <div class="hero__badge">
                Seit 20+ Jahren am Markt
            </div>

            <h1>Enterprise Mobility.<br><span class="text-gradient">Neu gedacht.</span></h1>

            <p class="hero__subtitle">
                SERIWA verbindet Ihre ERP-Systeme mit dem Außendienst — in Echtzeit, auf jedem Gerät, in jeder Branche. Schluss mit Medienbrüchen, Papierkram und verlorenen Daten.
            </p>

            <div class="hero__actions">
                <a href="#kontakt" class="btn btn-primary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 10l5 5-5 5"/><path d="M4 4v7a4 4 0 004 4h12"/></svg>
                    Demo anfragen
                </a>
                <a href="#plattform" class="btn btn-ghost">
                    Plattform entdecken
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17l9.2-9.2M17 17V7.8H7.8"/></svg>
                </a>
            </div>
        </div>
        <div class="hero__image fade-in">
            <img src="<?php echo esc_url(PCAMOBILE_URI . '/assets/images/products/tablet_SWO-2.png'); ?>"
                 alt="SERIWA auf Tablet"
                 loading="eager">
        </div>
    </div>
</section>
