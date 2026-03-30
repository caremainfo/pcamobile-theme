<footer class="site-footer" role="contentinfo">
    <div class="footer__main">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__brand">
                    <img src="<?php echo esc_url(PCAMOBILE_URI . '/assets/images/logo/pcamobile_nav.png'); ?>" alt="PCA Mobile" style="height: 36px; width: auto; margin-bottom: 0.5rem;">
                    <p>Enterprise Mobility Solutions für Logistik, Service und Außendienst. Seit über 20 Jahren Ihr Partner für digitale Prozesse.</p>
                </div>

                <div class="footer__col">
                    <h4>Plattform</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/plattform/')); ?>">SERIWA</a></li>
                        <li><a href="<?php echo esc_url(home_url('/plattform/')); ?>#features">Features</a></li>
                        <li><a href="<?php echo esc_url(home_url('/unternehmen/')); ?>#branchen">Branchen</a></li>
                        <li><a href="<?php echo esc_url(home_url('/kontakt/')); ?>">Demo anfragen</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4>Unternehmen</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/unternehmen/')); ?>">Über uns</a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">News</a></li>
                        <li><a href="<?php echo esc_url(home_url('/kontakt/')); ?>">Kontakt</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4>Rechtliches</h4>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'legal',
                        'container'      => false,
                        'fallback_cb'    => 'pcamobile_legal_fallback',
                        'depth'          => 1,
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer__bottom">
            <span>&copy; <?php echo date('Y'); ?> PCA Mobile GmbH. Alle Rechte vorbehalten.</span>

            <div class="footer__social">
                <a href="https://www.linkedin.com/company/pca-mobile/" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
                <a href="https://www.xing.com/pages/pcamobilegmbh" target="_blank" rel="noopener" aria-label="Xing">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18.188 0c-.517 0-.741.325-.927.66 0 0-7.455 13.224-7.702 13.657.015.024 4.919 9.023 4.919 9.023.17.308.436.66.967.66h3.454c.211 0 .375-.078.463-.22.089-.151.089-.346-.009-.536l-4.879-8.916c-.004-.006-.004-.016 0-.022L22.139.756c.095-.191.097-.387.006-.535C22.056.078 21.894 0 21.686 0h-3.498zM3.648 4.74c-.211 0-.385.074-.473.216-.09.149-.078.339.02.531l2.34 4.05c.004.01.004.016 0 .021L3.169 13.9c-.09.191-.088.389.006.531.087.142.255.224.463.224h3.454c.517 0 .752-.322.929-.66 0 0 2.376-4.318 2.452-4.465-.014-.025-2.385-4.135-2.385-4.135-.17-.308-.42-.66-.95-.66H3.648z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Liquid Glass SVG Filter -->
<svg class="hidden" style="display:none;">
    <defs>
        <filter id="liquid-glass" x="0%" y="0%" width="100%" height="100%" color-interpolation-filters="sRGB">
            <feTurbulence type="fractalNoise" baseFrequency="0.05 0.05" numOctaves="1" seed="1" result="turbulence"/>
            <feGaussianBlur in="turbulence" stdDeviation="2" result="blurredNoise"/>
            <feDisplacementMap in="SourceGraphic" in2="blurredNoise" scale="70" xChannelSelector="R" yChannelSelector="B" result="displaced"/>
            <feGaussianBlur in="displaced" stdDeviation="4" result="finalBlur"/>
            <feComposite in="finalBlur" in2="finalBlur" operator="over"/>
        </filter>
    </defs>
</svg>

<?php wp_footer(); ?>
</body>
</html>

<?php
function pcamobile_legal_fallback() {
    echo '<ul>';
    echo '<li><a href="' . esc_url(home_url('/impressum')) . '">Impressum</a></li>';
    echo '<li><a href="' . esc_url(home_url('/datenschutz')) . '">Datenschutz</a></li>';
    echo '<li><a href="' . esc_url(home_url('/agb')) . '">AGB</a></li>';
    echo '</ul>';
}
?>
