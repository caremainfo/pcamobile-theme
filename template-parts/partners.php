<?php
/**
 * Template Part: Partner Logos Bar
 *
 * @package PCAmobile
 */

$partners = [
    ['file' => 'DigitalerMittelstand.png', 'name' => 'Digitaler Mittelstand'],
    ['file' => 'Logo_0001_Ebene-16.png',   'name' => 'Partner'],
    ['file' => 'Logo_0011_Ebene-6.png',    'name' => 'Partner'],
    ['file' => 'Logo_0008_Ebene-9.png',    'name' => 'Partner'],
    ['file' => 'Logo_0006_Ebene-12.png',   'name' => 'Partner'],
];
?>
<div class="partners__logos fade-in">
    <?php foreach ($partners as $partner) : ?>
        <img src="<?php echo esc_url(PCAMOBILE_URI . '/assets/images/partners/' . $partner['file']); ?>"
             alt="<?php echo esc_attr($partner['name']); ?>"
             loading="lazy">
    <?php endforeach; ?>
</div>
