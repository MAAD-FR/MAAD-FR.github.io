# Thème WordPress M.A.A.D

Thème WordPress personnalisé pour Marie - Assistante Administrative & Digitale.

## 📦 Installation

1. Compressez le dossier `theme_maad_wp` en fichier ZIP
2. Connectez-vous à votre WordPress (`votre-site.com/wp-admin`)
3. Allez dans **Apparence → Thèmes**
4. Cliquez sur **Ajouter** puis **Téléverser un thème**
5. Uploadez le fichier ZIP
6. Activez le thème

## 🎨 Fonctionnalités

- ✅ Design original conservé à 100%
- ✅ Compatible avec l'éditeur Gutenberg
- ✅ Responsive (mobile, tablette, desktop)
- ✅ Support des images à la une
- ✅ Personnalisation des réseaux sociaux via le Customizer
- ✅ Templates spécifiques pour chaque type de contenu
- ✅ Performance optimisée

## 📄 Pages à créer

Après l'activation du thème, créez les pages suivantes :

1. **Qui suis-je** (slug: `qui-suis-je`)
2. **Services** (slug: `services`)
3. **Tarifs** (slug: `tarifs`)
4. **Feed** (slug: `feed`) - Définir comme page d'articles
5. **Contact** (slug: `contact`)
6. **Conditions d'utilisation** (slug: `conditions-utilisation`)
7. **Politique de confidentialité** (slug: `politique-confidentialite`)

## ⚙️ Configuration

### Réseaux sociaux

Allez dans **Apparence → Personnaliser → Réseaux Sociaux** pour modifier :
- URL Instagram
- URL LinkedIn
- URL Facebook
- Numéro WhatsApp

### Page d'accueil

1. Allez dans **Réglages → Lecture**
2. Sélectionnez "Une page statique"
3. Choisissez votre page d'accueil

### Page Feed (Blog)

1. Créez une page "Feed"
2. Dans **Réglages → Lecture**
3. Sélectionnez "Feed" comme page des articles

## 📝 Formulaire de contact

Pour le formulaire de contact, installez le plugin **Contact Form 7** :

1. Allez dans **Extensions → Ajouter**
2. Cherchez "Contact Form 7"
3. Installez et activez
4. Créez votre formulaire
5. Ajoutez le shortcode dans la page Contact

## 🎯 Structure du thème

```
theme_maad_wp/
├── style.css                # Styles principaux + header du thème
├── functions.php            # Fonctions du thème
├── header.php               # En-tête (header)
├── footer.php               # Pied de page
├── index.php                # Template principal
├── page.php                 # Template pour les pages
├── front-page.php           # Template page d'accueil
├── single.php               # Template pour les articles
├── archive.php              # Template pour le feed/blog
├── README.md                # Ce fichier
└── assets/
    ├── js/
    │   └── scripts.js       # JavaScript personnalisé
    └── images/              # Toutes les images
```

## 🚀 Support et maintenance

- Version WordPress requise : 5.9+
- Version PHP requise : 7.4+
- Thème testé jusqu'à WordPress 6.4

## 📧 Contact

Marie - M.A.A.D  
Site : https://maad-fr.github.io

---

**Version** : 1.0.0  
**Dernière mise à jour** : Janvier 2026
