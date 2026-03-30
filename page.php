<?php
/**
 * Template: Standard Page
 *
 * @package PCAmobile
 */

get_header();
?>

<main id="main" role="main">
    <div class="page-header">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <?php while (have_posts()) : the_post(); ?>
                <div class="single-post__content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</main>

<?php
get_footer();
