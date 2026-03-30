<?php
/**
 * Template Part: Trusted By / Logos
 *
 * @package PCAmobile
 */
?>
<section class="trusted section--light-alt">
    <div class="container fade-in">
        <p class="trusted__text">Vertrauen von führenden Unternehmen</p>
        <div class="trusted__logos">
            <?php
            // ACF Repeater Field: 'client_logos'
            if (function_exists('get_field') && have_rows('client_logos', 'option')) :
                while (have_rows('client_logos', 'option')) : the_row();
                    $logo = get_sub_field('logo');
                    $name = get_sub_field('company_name');
                    if ($logo) :
                        ?>
                        <img src="<?php echo esc_url($logo['url']); ?>"
                             alt="<?php echo esc_attr($name); ?>"
                             loading="lazy">
                        <?php
                    endif;
                endwhile;
            else :
                // Fallback: Echte Partner-Logos
                $partner_files = [
                    ['file' => 'DigitalerMittelstand.png', 'name' => 'Digitaler Mittelstand'],
                    ['file' => 'Logo_0001_Ebene-16.png',   'name' => 'Partner'],
                    ['file' => 'Logo_0011_Ebene-6.png',    'name' => 'Partner'],
                    ['file' => 'Logo_0008_Ebene-9.png',    'name' => 'Partner'],
                    ['file' => 'Logo_0006_Ebene-12.png',   'name' => 'Partner'],
                ];
                foreach ($partner_files as $p) :
                    ?>
                    <img src="<?php echo esc_url(PCAMOBILE_URI . '/assets/images/partners/' . $p['file']); ?>"
                         alt="<?php echo esc_attr($p['name']); ?>"
                         loading="lazy">
                    <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>
