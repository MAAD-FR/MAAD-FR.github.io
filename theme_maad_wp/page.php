<?php
/**
 * Template pour les pages
 * 
 * @package MAAD
 */

get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="qui-container">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
            </article>
        </div>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
