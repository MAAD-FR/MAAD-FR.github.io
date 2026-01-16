<?php
/**
 * Template pour la page 404 (page non trouvée)
 * 
 * @package MAAD
 */

get_header(); ?>

<main>
    <div class="qui-container">
        <section class="services-hero" style="text-align: center; padding: 3em 0;">
            <h3 class="section-title" style="font-size: 3em;">404</h3>
            <p class="section-intro" style="font-size: 1.3em; margin: 1em 0;">
                Oups ! La page que vous recherchez n'existe pas.
            </p>
            <p class="section-intro">
                Il se peut que le lien soit obsolète ou que vous ayez mal saisi l'adresse.
            </p>
            <a href="<?php echo home_url('/'); ?>" class="cta inline" style="margin-top: 2em;">
                Retour à l'accueil
            </a>
        </section>
    </div>
</main>

<?php get_footer(); ?>
