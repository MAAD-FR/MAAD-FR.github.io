<footer>
    <div class="footer-left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/M.A.A.D.png" alt="Logo M.A.A.D" class="footer-logo">
        <span>&copy; <?php echo date('Y'); ?> M.A.A.D</span>
    </div>

    <div class="footer-center footer-social">
        <?php 
        $instagram = get_theme_mod('maad_instagram_url', 'https://www.instagram.com/marieblancogimet');
        $linkedin = get_theme_mod('maad_linkedin_url', 'https://www.linkedin.com/in/marie-blancog');
        $facebook = get_theme_mod('maad_facebook_url', 'https://www.facebook.com/profile.php?id=61581340053261');
        $whatsapp = get_theme_mod('maad_whatsapp_number', '33670432952');
        ?>
        
        <?php if ($instagram) : ?>
        <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-instagram-100.png" alt="Instagram">
        </a>
        <?php endif; ?>
        
        <?php if ($linkedin) : ?>
        <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-linkedin-100.png" alt="LinkedIn">
        </a>
        <?php endif; ?>
        
        <?php if ($facebook) : ?>
        <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-facebook-100.png" alt="Facebook">
        </a>
        <?php endif; ?>
        
        <?php if ($whatsapp) : ?>
        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" target="_blank" rel="noopener">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-whatsapp-100.png" alt="WhatsApp">
        </a>
        <?php endif; ?>
    </div>

    <div class="footer-right">
        <a href="<?php echo home_url('/conditions-utilisation'); ?>">Conditions d'utilisation</a> | 
        <a href="<?php echo home_url('/politique-confidentialite'); ?>">Politique de confidentialité</a>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
