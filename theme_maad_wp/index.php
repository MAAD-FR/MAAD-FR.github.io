<?php
/**
 * Template principal
 * 
 * @package MAAD
 */

get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; else : ?>
        <p><?php _e('Aucun contenu trouvé.', 'maad'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
