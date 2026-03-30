<?php
/**
 * Template Part: News / Blog Teaser
 *
 * @package PCAmobile
 */

$news_query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
]);
?>
<section class="section section--light" id="news">
    <div class="container">
        <div class="section__header fade-in">
            <h2>Aktuelles</h2>
            <p>Neuigkeiten, Insights und Trends rund um Enterprise Mobility.</p>
        </div>

        <div class="news__grid">
            <?php if ($news_query->have_posts()) : ?>
                <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
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
                                Weiterlesen
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <!-- Fallback: Platzhalter-Karten -->
                <?php
                $placeholders = [
                    ['title' => 'Digitale Wertschöpfungsketten im Außendienst', 'excerpt' => 'Wie SERIWA durchgängige digitale Prozesse vom Innendienst bis zum Techniker vor Ort ermöglicht.'],
                    ['title' => 'Neues Modul: Projektmanagement', 'excerpt' => 'Komplexe Projekte mobil steuern — mit Meilensteinen, Ressourcenplanung und Echtzeit-Reporting.'],
                    ['title' => 'Mobile Datenerfassung im Gesundheitswesen', 'excerpt' => 'Best Practices für die digitale Dokumentation im ambulanten Pflegedienst und Homecare-Bereich.'],
                ];
                foreach ($placeholders as $ph) : ?>
                    <article class="news-card fade-in">
                        <div class="news-card__image"></div>
                        <div class="news-card__body">
                            <span class="news-card__date"><?php echo date('d. M Y'); ?></span>
                            <h3><a href="#"><?php echo esc_html($ph['title']); ?></a></h3>
                            <p><?php echo esc_html($ph['excerpt']); ?></p>
                            <span class="news-card__link">
                                Weiterlesen
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                            </span>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
