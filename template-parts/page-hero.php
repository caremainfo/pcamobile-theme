<?php
/**
 * Template Part: Page Hero (Inner Pages)
 *
 * Usage: set $args['title'], $args['subtitle'], $args['image'] before get_template_part()
 *
 * @package PCAmobile
 */

$title    = $args['title'] ?? get_the_title();
$subtitle = $args['subtitle'] ?? '';
$image    = $args['image'] ?? '';
$split    = !empty($image);
?>
<section class="page-hero <?php echo $split ? 'page-hero--split' : ''; ?>">
    <div class="container">
        <div class="page-hero__content fade-in">
            <h1><?php echo wp_kses_post($title); ?></h1>
            <?php if ($subtitle) : ?>
                <p><?php echo esc_html($subtitle); ?></p>
            <?php endif; ?>
        </div>
        <?php if ($split) : ?>
            <div class="page-hero__image fade-in">
                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(wp_strip_all_tags($title)); ?>" loading="lazy">
            </div>
        <?php endif; ?>
    </div>
</section>
