<?php
/**
 * Template Part: Feature Showcase (alternating image/text)
 *
 * Usage: pass $args['features'] array with keys: title, description, image, icon_svg, items[]
 *
 * @package PCAmobile
 */

$features = $args['features'] ?? [];
if (empty($features)) return;

foreach ($features as $index => $feature) :
    $reversed = $index % 2 !== 0;
?>
    <div class="feature-showcase <?php echo $reversed ? 'feature-showcase--reversed' : ''; ?> fade-in">
        <?php if (!empty($feature['image'])) : ?>
            <div class="feature-showcase__image">
                <img src="<?php echo esc_url($feature['image']); ?>"
                     alt="<?php echo esc_attr($feature['title']); ?>"
                     loading="lazy">
            </div>
        <?php else : ?>
            <div class="feature-showcase__image" style="display: flex; align-items: center; justify-content: center;">
                <div class="feature-showcase__icon">
                    <?php echo $feature['icon_svg'] ?? ''; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="feature-showcase__text">
            <h3><?php echo esc_html($feature['title']); ?></h3>
            <p><?php echo esc_html($feature['description']); ?></p>
            <?php if (!empty($feature['items'])) : ?>
                <ul>
                    <?php foreach ($feature['items'] as $item) : ?>
                        <li><?php echo esc_html($item); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; ?>
