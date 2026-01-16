<?php
/**
 * Template pour les articles individuels
 * 
 * @package MAAD
 */

get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="qui-container">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h3><?php the_title(); ?></h3>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                
                <div class="post-meta">
                    <p><small>Publié le <?php echo get_the_date(); ?></small></p>
                </div>
            </article>
        </div>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
