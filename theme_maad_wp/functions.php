<?php
/**
 * M.A.A.D Theme Functions
 * 
 * @package MAAD
 * @since 1.0.0
 */

// Configuration du thème
function maad_theme_setup() {
    // Support de la balise title
    add_theme_support('title-tag');
    
    // Support des images à la une
    add_theme_support('post-thumbnails');
    
    // Support de l'éditeur de blocs (Gutenberg)
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    
    // Support HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));
    
    // Enregistrer les menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'maad'),
    ));
    
    // Support du logo personnalisé
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'maad_theme_setup');

// Charger les styles et scripts
function maad_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Actor&display=swap',
        array(),
        null
    );
    
    // Style principal
    wp_enqueue_style(
        'maad-style',
        get_stylesheet_uri(),
        array('google-fonts'),
        wp_get_theme()->get('Version')
    );
    
    // Scripts personnalisés
    wp_enqueue_script(
        'maad-scripts',
        get_template_directory_uri() . '/assets/js/scripts.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'maad_enqueue_assets');

// Créer des URLs propres pour vos pages
function maad_custom_rewrite_rules() {
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'maad_custom_rewrite_rules');

// Ajouter les réseaux sociaux dans le customizer
function maad_customize_register($wp_customize) {
    // Section réseaux sociaux
    $wp_customize->add_section('maad_social_section', array(
        'title'    => __('Réseaux Sociaux', 'maad'),
        'priority' => 30,
    ));
    
    // Instagram
    $wp_customize->add_setting('maad_instagram_url', array(
        'default' => 'https://www.instagram.com/marieblancogimet',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('maad_instagram_url', array(
        'label'   => __('URL Instagram', 'maad'),
        'section' => 'maad_social_section',
        'type'    => 'url',
    ));
    
    // LinkedIn
    $wp_customize->add_setting('maad_linkedin_url', array(
        'default' => 'https://www.linkedin.com/in/marie-blancog',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('maad_linkedin_url', array(
        'label'   => __('URL LinkedIn', 'maad'),
        'section' => 'maad_social_section',
        'type'    => 'url',
    ));
    
    // Facebook
    $wp_customize->add_setting('maad_facebook_url', array(
        'default' => 'https://www.facebook.com/profile.php?id=61581340053261',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('maad_facebook_url', array(
        'label'   => __('URL Facebook', 'maad'),
        'section' => 'maad_social_section',
        'type'    => 'url',
    ));
    
    // WhatsApp
    $wp_customize->add_setting('maad_whatsapp_number', array(
        'default' => '33670432952',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('maad_whatsapp_number', array(
        'label'   => __('Numéro WhatsApp (format international)', 'maad'),
        'section' => 'maad_social_section',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'maad_customize_register');

// Désactiver les commentaires par défaut
function maad_disable_comments_post_types_support() {
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if(post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}
add_action('admin_init', 'maad_disable_comments_post_types_support');

// Support des extraits pour les pages
add_post_type_support('page', 'excerpt');
