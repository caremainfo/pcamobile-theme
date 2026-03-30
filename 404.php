<?php
/**
 * Template: 404 Error Page
 *
 * @package PCAmobile
 */

get_header();
?>

<main id="main" role="main">
    <div class="section section--dark error-404">
        <div class="container">
            <div class="error-404__code">404</div>
            <h2 style="color: #fff; margin: 1rem 0;">Seite nicht gefunden</h2>
            <p style="color: var(--color-text-muted); font-size: 1.125rem; margin-bottom: 2rem;">
                Die angeforderte Seite existiert nicht oder wurde verschoben.
            </p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                Zurück zur Startseite
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
