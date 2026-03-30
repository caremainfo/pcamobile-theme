<?php
/**
 * Template Part: Contact Section
 *
 * @package PCAmobile
 */
?>
<section class="section section--dark" id="kontakt">
    <div class="container">
        <div class="section__header fade-in">
            <h2>Sprechen Sie mit uns.</h2>
            <p>Ob Demo, Beratung oder konkretes Projekt — wir sind für Sie da.</p>
        </div>

        <div class="contact__grid fade-in">
            <form id="contact-form" class="contact-form" novalidate>
                <div class="form-group">
                    <label for="contact-name">Name *</label>
                    <input type="text" id="contact-name" name="name" placeholder="Ihr vollständiger Name" required>
                </div>

                <div class="form-group">
                    <label for="contact-company">Unternehmen</label>
                    <input type="text" id="contact-company" name="company" placeholder="Firmenname">
                </div>

                <div class="form-group">
                    <label for="contact-email">E-Mail *</label>
                    <input type="email" id="contact-email" name="email" placeholder="ihre@email.de" required>
                </div>

                <div class="form-group">
                    <label for="contact-message">Nachricht *</label>
                    <textarea id="contact-message" name="message" placeholder="Wie können wir Ihnen helfen?" required></textarea>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" id="contact-privacy" name="privacy" required>
                    <label for="contact-privacy">
                        Ich stimme der Verarbeitung meiner Daten gemäß der
                        <a href="<?php echo esc_url(home_url('/datenschutz')); ?>" target="_blank" style="color: var(--color-accent);">Datenschutzerklärung</a> zu. *
                    </label>
                </div>

                <div class="form-message"></div>

                <button type="submit" class="btn btn-primary">
                    Nachricht senden
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
                </button>
            </form>

            <div class="contact-info">
                <h3>PCA Mobile GmbH</h3>

                <div class="contact-info__item">
                    <div class="contact-info__icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div class="contact-info__text">
                        <p>Emanuel-Leutze-Str. 21</p>
                        <p>D-40547 Düsseldorf</p>
                    </div>
                </div>

                <div class="contact-info__item">
                    <div class="contact-info__icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    </div>
                    <div class="contact-info__text">
                        <p>+49 (0) 211 936 790 60</p>
                        <small>Mo–Fr, 08:00–17:30 Uhr</small>
                    </div>
                </div>

                <div class="contact-info__item">
                    <div class="contact-info__icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg>
                    </div>
                    <div class="contact-info__text">
                        <p>kontakt@pcamobile.de</p>
                        <small>Antwort innerhalb von 24 Stunden</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
