<?php
/**
 * Template: Single Post
 *
 * @package PCAmobile
 */

get_header();
?>

<main id="main" role="main">
    <?php while (have_posts()) : the_post(); ?>
        <div class="page-header">
            <div class="container">
                <h1><?php the_title(); ?></h1>
                <div class="single-post__meta" style="justify-content: center; margin-top: 1rem;">
                    <time datetime="<?php echo get_the_date('c'); ?>" style="color: var(--color-accent); font-family: var(--font-mono); font-size: 0.875rem;">
                        <?php echo get_the_date('d. F Y'); ?>
                    </time>
                    <span style="color: var(--color-text-muted);">·</span>
                    <span style="color: var(--color-text-muted);"><?php echo esc_html(get_the_author()); ?></span>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="container">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>"
                         alt="<?php the_title_attribute(); ?>"
                         style="width: 100%; border-radius: var(--radius-lg); margin-bottom: 2rem;"
                         loading="lazy">
                <?php endif; ?>

                <div class="single-post__content">
                    <?php the_content(); ?>
                </div>

                <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid rgba(0,0,0,0.08);">
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-ghost--dark">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"/><path d="M12 19l-7-7 7-7"/></svg>
                        Zurück zum Blog
                    </a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</main>

<?php
get_footer();
