/**
 * Scripts pour le thème M.A.A.D
 * 
 * @package MAAD
 */

// Fonction pour ajuster le padding du footer
function setFooterPadding() {
  const footer = document.querySelector('footer');
  if (!footer) return;
  const h = footer.offsetHeight || 0;
  // Set the CSS variable so body padding-bottom adapts to the real footer height
  document.documentElement.style.setProperty('--footer-h', `${h}px`);
}

// Au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
  setFooterPadding();
});

// Au redimensionnement de la fenêtre
window.addEventListener('resize', setFooterPadding);

// Mettre à jour au chargement des images (au cas où le footer change de hauteur)
window.addEventListener('load', setFooterPadding);
