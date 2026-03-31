<?php
/**
 * Template Name: Hardware
 * Template: Hardware Übersicht (Point Mobile & Urovo)
 *
 * @package PCAmobile
 */

get_header();

$img = PCAMOBILE_URI . '/assets/images/products/';

// Helper for 4 dummy images. In reality, the user will replace these.
$pm_images = [
    $img . 'pm_front.png',
    $img . 'pm_side.png',
    $img . 'pm_back.png',
    $img . 'pm_lifestyle.png'
];
$ur_images = [
    $img . 'ur_front.png',
    $img . 'ur_side.png',
    $img . 'ur_back.png',
    $img . 'ur_lifestyle.png'
];

$point_mobile = [
    [
        'name' => 'PM95',
        'type' => 'Pro Enterprise Smartphone',
        'specs' => ['5G & Wi-Fi 6E', 'Octa-core 2.4GHz', '6.0" FHD+ Display', 'IP68 & 1.8m Drop spec'],
        'highlights' => 'Das moderne Flaggschiff kombiniert elegantes Design mit beispielloser Robustheit für anspruchsvolle Field-Service-Aufgaben.',
        'images' => $pm_images,
        'benchmarks' => [
            ['label' => 'Robustheit', 'score' => 90, 'color' => '#1d1d1f', 'text' => 'Sehr hoch (IP68)'],
            ['label' => 'Displaygröße', 'score' => 95, 'color' => '#2997ff', 'text' => '6.0 Zoll'],
            ['label' => 'Preis-Index', 'score' => 85, 'color' => '#86868b', 'text' => 'Premium'],
            ['label' => 'Android Version', 'score' => 100, 'color' => '#34c759', 'text' => 'Android 14']
        ]
    ],
    [
        'name' => 'PM452',
        'type' => 'Heavy Duty Terminal',
        'specs' => ['Physische Tastatur', 'Octa-core 2.0GHz', '4.3" Display', 'IP65'],
        'highlights' => 'Ideal für raue Lagerumgebungen. Die physische Tastatur ermöglicht auch mit Handschuhen eine präzise Dateneingabe.',
        'images' => $pm_images,
        'benchmarks' => [
            ['label' => 'Robustheit', 'score' => 95, 'color' => '#1d1d1f', 'text' => 'Extrem (IP65)'],
            ['label' => 'Displaygröße', 'score' => 60, 'color' => '#2997ff', 'text' => '4.3 Zoll'],
            ['label' => 'Preis-Index', 'score' => 65, 'color' => '#86868b', 'text' => 'Medium'],
            ['label' => 'Android Version', 'score' => 80, 'color' => '#34c759', 'text' => 'Android 12']
        ]
    ],
    [
        'name' => 'PM352',
        'type' => 'Lightweight EDA',
        'specs' => ['Wi-Fi 5', 'Kompaktes Design', '4.0" Display', 'IP65'],
        'highlights' => 'Das Leichtgewicht für den Einzelhandel. Ergonomisches Design für Scannen am Point of Sale oder bei der Inventur.',
        'images' => $pm_images,
        'benchmarks' => [
            ['label' => 'Robustheit', 'score' => 75, 'color' => '#1d1d1f', 'text' => 'Hoch (IP65)'],
            ['label' => 'Displaygröße', 'score' => 50, 'color' => '#2997ff', 'text' => '4.0 Zoll'],
            ['label' => 'Preis-Index', 'score' => 45, 'color' => '#86868b', 'text' => 'Einstieg'],
            ['label' => 'Android Version', 'score' => 70, 'color' => '#34c759', 'text' => 'Android 11']
        ]
    ],
    [
        'name' => 'TR54',
        'type' => 'Kompaktes Terminal',
        'specs' => ['Leichtes Gehäuse', 'Leistungsstarker Scanner', '5.5" Display', 'IP65'],
        'highlights' => 'Ein vielseitiger Allrounder für Transport und Logistik mit ausdauerndem Akku und exzellenter Scan-Leistung.',
        'images' => $pm_images,
        'benchmarks' => [
            ['label' => 'Robustheit', 'score' => 80, 'color' => '#1d1d1f', 'text' => 'Hoch (IP65)'],
            ['label' => 'Displaygröße', 'score' => 85, 'color' => '#2997ff', 'text' => '5.5 Zoll'],
            ['label' => 'Preis-Index', 'score' => 60, 'color' => '#86868b', 'text' => 'Medium'],
            ['label' => 'Android Version', 'score' => 70, 'color' => '#34c759', 'text' => 'Android 11']
        ]
    ],
    [
        'name' => 'MF52',
        'type' => 'Wearable Scanner',
        'specs' => ['Extrem leicht', 'Bluetooth 5.0', 'Kompaktes Display', 'IP65'],
        'highlights' => 'Hands-free Scanning-Lösung. Perfekt für hochfrequentierte Logistikzentren, in denen beide Hände benötigt werden.',
        'images' => $pm_images,
        'benchmarks' => [
            ['label' => 'Robustheit', 'score' => 85, 'color' => '#1d1d1f', 'text' => 'Sehr hoch (IP65)'],
            ['label' => 'Displaygröße', 'score' => 20, 'color' => '#2997ff', 'text' => 'Kompakt'],
            ['label' => 'Preis-Index', 'score' => 50, 'color' => '#86868b', 'text' => 'Einstieg'],
            ['label' => 'Android Version', 'score' => 50, 'color' => '#34c759', 'text' => 'proprietär']
        ]
    ]
];

$urovo = [
    [
        'name' => 'DT66',
        'type' => 'Enterprise Rugged Phone',
        'specs' => ['5G-Konnektivität', 'Qualcomm Prozessor', '6.0" Display', 'IP67'],
        'highlights' => 'Der Standard für den Außendienst. Hervorragende Performance für komplexe SERIWA-Anwendungen im Feld.',
        'images' => $ur_images,
        'benchmarks' => [
            ['label' => 'Robustheit', 'score' => 85, 'color' => '#1d1d1f', 'text' => 'Sehr hoch (IP67)'],
            ['label' => 'Displaygröße', 'score' => 95, 'color' => '#2997ff', 'text' => '6.0 Zoll'],
            ['label' => 'Preis-Index', 'score' => 75, 'color' => '#86868b', 'text' => 'Premium'],
            ['label' => 'Android Version', 'score' => 95, 'color' => '#34c759', 'text' => 'Android 13']
        ]
    ],
    [
        'name' => 'DT610',
        'type' => 'Enterprise Rugged Phone',
        'specs' => ['4G LTE', 'Scharfzeichnendes Display', '6.0" Display', 'IP67'],
        'highlights' => 'Robuster Alleskönner für eine Vielzahl von Anwendungen mit perfekt ausbalanciertem Preis-Leistungs-Verhältnis.',
        'images' => $ur_images,
        'benchmarks' => [
            ['label' => 'Robustheit', 'score' => 85, 'color' => '#1d1d1f', 'text' => 'Sehr hoch (IP67)'],
            ['label' => 'Displaygröße', 'score' => 95, 'color' => '#2997ff', 'text' => '6.0 Zoll'],
            ['label' => 'Preis-Index', 'score' => 65, 'color' => '#86868b', 'text' => 'Medium'],
            ['label' => 'Android Version', 'score' => 80, 'color' => '#34c759', 'text' => 'Android 12']
        ]
    ],
    [
        'name' => 'DT630',
        'type' => 'Pro Enterprise Smartphone',
        'specs' => ['Maximale Ausdauer', 'Ultra-helles Panel', '6.3" Display', 'IP68'],
        'highlights' => 'Maximales Display für maximale Übersicht. Das DT630 bietet das beste visuelle Erlebnis der Urovo-Familie.',
        'images' => $ur_images,
        'benchmarks' => [
            ['label' => 'Robustheit', 'score' => 90, 'color' => '#1d1d1f', 'text' => 'Extrem (IP68)'],
            ['label' => 'Displaygröße', 'score' => 100, 'color' => '#2997ff', 'text' => '6.3 Zoll'],
            ['label' => 'Preis-Index', 'score' => 90, 'color' => '#86868b', 'text' => 'High-End'],
            ['label' => 'Android Version', 'score' => 95, 'color' => '#34c759', 'text' => 'Android 13']
        ]
    ],
    [
        'name' => 'RT40S',
        'type' => 'Industrial Scanner Keyboard',
        'specs' => ['Gefrierschrank-tauglich', 'Long-Range-Scanner', 'Physische Tastatur', 'IP68'],
        'highlights' => 'Entwickelt für extremste Bedingungen wie in Kühlhäusern, mit spezieller Anti-Kondensations-Technologie.',
        'images' => $ur_images,
        'benchmarks' => [
            ['label' => 'Robustheit', 'score' => 100, 'color' => '#1d1d1f', 'text' => 'Industriestandard (IP68)'],
            ['label' => 'Displaygröße', 'score' => 50, 'color' => '#2997ff', 'text' => '4.0 Zoll'],
            ['label' => 'Preis-Index', 'score' => 95, 'color' => '#86868b', 'text' => 'High-End'],
            ['label' => 'Android Version', 'score' => 70, 'color' => '#34c759', 'text' => 'Android 11']
        ]
    ]
];

?>

<main id="main" role="main" class="hardware-page">

    <!-- Hardware Hero -->
    <section class="hw-hero fade-in">
        <div class="container hw-hero__container">
            <h1 class="hw-hero__title">Pro. <span class="text-gradient">Hardware.</span></h1>
            <p class="hw-hero__subtitle">Die leistungsstärksten Geräte von Point Mobile und Urovo für SERIWA. Gebaut für Extreme.</p>
        </div>
    </section>

    <!-- Point Mobile Section -->
    <section class="hw-brand-section" id="point-mobile">
        <div class="container">
            <div class="hw-brand-header">
                <h2>Point Mobile</h2>
                <p>Innovative Lösungen, grenzenlose Zuverlässigkeit.</p>
            </div>

            <div class="hw-products">
                <?php foreach ($point_mobile as $index => $product) : 
                    $is_even = $index % 2 == 0;
                ?>
                    <div class="hw-product fade-in <?php echo $is_even ? '' : 'hw-product--reverse'; ?>">
                        <div class="hw-product__content">
                            <h3 class="hw-product__name"><?php echo esc_html($product['name']); ?></h3>
                            <div class="hw-product__type"><?php echo esc_html($product['type']); ?></div>
                            <p class="hw-product__highlight"><?php echo esc_html($product['highlights']); ?></p>
                            
                            <ul class="hw-product__specs">
                                <?php foreach ($product['specs'] as $spec) : ?>
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <?php echo esc_html($spec); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="hw-benchmarks">
                                <h4>Benchmarks</h4>
                                <?php foreach ($product['benchmarks'] as $bm) : ?>
                                    <div class="hw-benchmark">
                                        <div class="hw-benchmark__header">
                                            <span class="hw-benchmark__label"><?php echo esc_html($bm['label']); ?></span>
                                            <span class="hw-benchmark__val"><?php echo esc_html($bm['text']); ?></span>
                                        </div>
                                        <div class="hw-benchmark__track">
                                            <div class="hw-benchmark__bar" style="width: <?php echo esc_attr($bm['score']); ?>%; background-color: <?php echo esc_attr($bm['color']); ?>;">
                                                <div class="hw-benchmark__bar-3d-top"></div>
                                                <div class="hw-benchmark__bar-3d-side"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="hw-product__gallery">
                            <div class="hw-gallery-grid">
                                <?php foreach ($product['images'] as $img_src) : ?>
                                    <div class="hw-gallery-item">
                                        <img src="<?php echo esc_url($img_src); ?>" alt="<?php echo esc_attr($product['name']); ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Urovo Section -->
    <section class="hw-brand-section hw-brand-section--gray" id="urovo">
        <div class="container">
            <div class="hw-brand-header">
                <h2>Urovo</h2>
                <p>Enterprise-Technologie. Für jeden Einsatz gerüstet.</p>
            </div>

            <div class="hw-products">
                <?php foreach ($urovo as $index => $product) : 
                    $is_even = $index % 2 == 0;
                ?>
                    <div class="hw-product fade-in <?php echo $is_even ? '' : 'hw-product--reverse'; ?>">
                        <div class="hw-product__content">
                            <h3 class="hw-product__name"><?php echo esc_html($product['name']); ?></h3>
                            <div class="hw-product__type"><?php echo esc_html($product['type']); ?></div>
                            <p class="hw-product__highlight"><?php echo esc_html($product['highlights']); ?></p>
                            
                            <ul class="hw-product__specs">
                                <?php foreach ($product['specs'] as $spec) : ?>
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <?php echo esc_html($spec); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="hw-benchmarks">
                                <h4>Benchmarks</h4>
                                <?php foreach ($product['benchmarks'] as $bm) : ?>
                                    <div class="hw-benchmark">
                                        <div class="hw-benchmark__header">
                                            <span class="hw-benchmark__label"><?php echo esc_html($bm['label']); ?></span>
                                            <span class="hw-benchmark__val"><?php echo esc_html($bm['text']); ?></span>
                                        </div>
                                        <div class="hw-benchmark__track">
                                            <div class="hw-benchmark__bar" style="width: <?php echo esc_attr($bm['score']); ?>%; background-color: <?php echo esc_attr($bm['color']); ?>;">
                                                <div class="hw-benchmark__bar-3d-top"></div>
                                                <div class="hw-benchmark__bar-3d-side"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="hw-product__gallery">
                            <div class="hw-gallery-grid">
                                <?php foreach ($product['images'] as $img_src) : ?>
                                    <div class="hw-gallery-item">
                                        <img src="<?php echo esc_url($img_src); ?>" alt="<?php echo esc_attr($product['name']); ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php get_template_part('template-parts/cta'); ?>

</main>

<?php
get_footer();
