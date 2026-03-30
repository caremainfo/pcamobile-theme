<?php
/**
 * Template Part: Industries / Branchen Grid
 *
 * @package PCAmobile
 */

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
<section class="section section--dark" id="branchen">
    <div class="container">
        <div class="section__header fade-in">
            <h2>Maßgeschneidert für <span class="text-gradient">Ihre Branche.</span></h2>
            <p>Branchenspezifische Module und Workflows — vorkonfiguriert und sofort einsatzbereit.</p>
        </div>

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
