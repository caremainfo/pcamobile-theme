<?php
/**
 * The main template file (fallback)
 *
 * @package PCAmobile
 */

get_header();
?>

<main id="main" role="main">
    <div class="page-header">
        <div class="container">
            <h1>Blog</h1>
            <p>Neuigkeiten und Insights rund um Enterprise Mobility.</p>
        </div>
    </div>

    <div class="page-content">
        <div class="container" style="max-width: var(--container-width);">
            <?php if (have_posts()) : ?>
                <div class="archive-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="news-card fade-in">
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="news-card__image"
                                     src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'card-thumb')); ?>"
                                     alt="<?php the_title_attribute(); ?>"
                                     loading="lazy">
                            <?php else : ?>
                                <div class="news-card__image"></div>
                            <?php endif; ?>

                            <div class="news-card__body">
                                <time class="news-card__date" datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date('d. M Y'); ?>
                                </time>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
                                <a href="<?php the_permalink(); ?>" class="news-card__link">
                                    Weiterlesen →
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div style="text-align: center; margin-top: 3rem;">
                    <?php the_posts_pagination([
                        'mid_size'  => 2,
                        'prev_text' => '← Zurück',
                        'next_text' => 'Weiter →',
                    ]); ?>
                </div>
            <?php else : ?>
                <p style="text-align: center;">Keine Beiträge gefunden.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php
get_footer();
