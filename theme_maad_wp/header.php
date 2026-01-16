<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if (is_front_page()) : ?>
    <!-- Header spécial pour la page d'accueil -->
    <header class="home-header">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MAAD.png" alt="Logo M.A.A.D" class="logo-large">
        <h1>Marie</h1>
        <h2>Assistante Administrative & Digitale</h2>
        <nav class="vertical-nav">
            <a href="<?php echo home_url('/qui-suis-je'); ?>" class="nav-btn">Qui suis-je ?</a>
            <a href="<?php echo home_url('/services'); ?>" class="nav-btn">Services</a>
            <a href="<?php echo home_url('/tarifs'); ?>" class="nav-btn">Tarifs</a>
            <a href="<?php echo home_url('/feed'); ?>" class="nav-btn">Feed</a>
            <a href="<?php echo home_url('/contact'); ?>" class="nav-btn">Contact</a>
        </nav>
    </header>
<?php else : ?>
    <!-- Header normal pour les autres pages -->
    <header>
        <nav class="horizontal-nav">
            <a href="<?php echo home_url('/'); ?>" class="nav-btn home-icon" aria-label="Accueil" title="Accueil">🏠</a>
            <a href="<?php echo home_url('/qui-suis-je'); ?>" class="nav-btn">Qui suis-je ?</a>
            <a href="<?php echo home_url('/services'); ?>" class="nav-btn">Services</a>
            <a href="<?php echo home_url('/tarifs'); ?>" class="nav-btn">Tarifs</a>
            <a href="<?php echo home_url('/feed'); ?>" class="nav-btn">Feed</a>
            <a href="<?php echo home_url('/contact'); ?>" class="nav-btn">Contact</a>
        </nav>

        <div class="brand">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MAAD.png" alt="Logo M.A.A.D" class="logo">
            <div class="brand-text">
                <h1>Marie</h1>
                <h2>Assistante Administrative & Digitale</h2>
            </div>
        </div>
    </header>
<?php endif; ?>
