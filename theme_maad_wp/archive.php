<?php
/**
 * Template pour les archives (Feed/Blog)
 * 
 * @package MAAD
 */

get_header(); ?>

<main>
    <div class="qui-container">
        <section class="services-hero">
            <h3 class="section-title">
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_date()) {
                    echo 'Archives : ' . get_the_date('F Y');
                } else {
                    echo 'Feed';
                }
                ?>
            </h3>
        </section>

        <?php if (have_posts()) : ?>
            <div class="feed-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('feed-item'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="feed-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        
                        <div class="feed-meta">
                            <small><?php echo get_the_date(); ?></small>
                        </div>
                        
                        <div class="feed-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="cta inline">Lire la suite</a>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('&laquo; Précédent', 'maad'),
                    'next_text' => __('Suivant &raquo;', 'maad'),
                ));
                ?>
            </div>
        <?php else : ?>
            <p><?php _e('Aucun article trouvé.', 'maad'); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
