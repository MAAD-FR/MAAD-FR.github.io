# Guide d'installation - Thème WordPress M.A.A.D

## 📋 Pré-requis

- WordPress 5.9 ou supérieur installé sur votre hébergeur
- PHP 7.4 ou supérieur
- Accès à l'administration WordPress

## 🚀 Installation du thème

### Étape 1 : Préparer le fichier ZIP

1. Compressez le dossier `theme_maad_wp` en fichier ZIP
   - Sur Windows : Clic droit sur le dossier → "Envoyer vers" → "Dossier compressé"
   - Le fichier doit s'appeler `theme_maad_wp.zip`

### Étape 2 : Installer le thème dans WordPress

1. Connectez-vous à votre administration WordPress
   - URL : `https://votre-site.com/wp-admin`

2. Dans le menu de gauche, allez dans :
   - **Apparence** → **Thèmes**

3. Cliquez sur le bouton **Ajouter** (en haut de la page)

4. Cliquez sur **Téléverser un thème**

5. Cliquez sur **Choisir un fichier** et sélectionnez `theme_maad_wp.zip`

6. Cliquez sur **Installer maintenant**

7. Une fois l'installation terminée, cliquez sur **Activer**

✅ Votre thème est maintenant actif !

## 📄 Configuration initiale

### Étape 3 : Créer les pages

Créez les pages suivantes dans **Pages → Ajouter** :

#### Page 1 : Accueil
- Titre : `Accueil`
- Contenu : (laissez vide pour l'instant ou ajoutez votre contenu)
- Publier

#### Page 2 : Qui suis-je
- Titre : `Qui suis-je ?`
- Slug : `qui-suis-je` (dans Permalien, à droite)
- Contenu : Votre présentation
- Publier

#### Page 3 : Services
- Titre : `Services`
- Slug : `services`
- Contenu : Vos services
- Publier

#### Page 4 : Tarifs
- Titre : `Tarifs`
- Slug : `tarifs`
- Contenu : Vos tarifs
- Publier

#### Page 5 : Feed
- Titre : `Feed`
- Slug : `feed`
- Contenu : (laisser vide, ce sera le blog)
- Publier

#### Page 6 : Contact
- Titre : `Contact`
- Slug : `contact`
- Contenu : Formulaire de contact (voir étape 5)
- Publier

#### Page 7 : Conditions d'utilisation
- Titre : `Conditions d'utilisation`
- Slug : `conditions-utilisation`
- Contenu : Vos conditions
- Publier

#### Page 8 : Politique de confidentialité
- Titre : `Politique de confidentialité`
- Slug : `politique-confidentialite`
- Contenu : Votre politique de confidentialité
- Publier

### Étape 4 : Configurer la page d'accueil

1. Allez dans **Réglages → Lecture**
2. Dans "Affichage de la page d'accueil", sélectionnez **Une page statique**
3. Pour "Page d'accueil", sélectionnez **Accueil**
4. Pour "Page des articles", sélectionnez **Feed**
5. Cliquez sur **Enregistrer les modifications**

### Étape 5 : Installer le formulaire de contact

1. Allez dans **Extensions → Ajouter**
2. Dans la barre de recherche, tapez "Contact Form 7"
3. Cliquez sur **Installer maintenant** sur le plugin "Contact Form 7"
4. Cliquez sur **Activer**

#### Configurer le formulaire :

1. Allez dans **Contact → Formulaires de contact**
2. Vous verrez un formulaire par défaut "Formulaire de contact 1"
3. Cliquez dessus pour le modifier
4. Copiez le shortcode (ex: `[contact-form-7 id="123" title="Formulaire de contact 1"]`)
5. Allez dans **Pages**, éditez la page **Contact**
6. Collez le shortcode dans l'éditeur
7. Cliquez sur **Mettre à jour**

### Étape 6 : Personnaliser les réseaux sociaux

1. Allez dans **Apparence → Personnaliser**
2. Cliquez sur **Réseaux Sociaux**
3. Modifiez les URLs :
   - URL Instagram
   - URL LinkedIn
   - URL Facebook
   - Numéro WhatsApp (format international : 33670432952)
4. Cliquez sur **Publier**

### Étape 7 : Configurer les permaliens

1. Allez dans **Réglages → Permaliens**
2. Sélectionnez **Nom de l'article**
3. Cliquez sur **Enregistrer les modifications**

## 🎨 Personnalisation avancée

### Ajouter du contenu avec l'éditeur

Utilisez l'éditeur Gutenberg (éditeur par blocs de WordPress) pour ajouter :
- Paragraphes
- Titres
- Images
- Colonnes
- Boutons
- Et bien plus !

### Ajouter des articles au Feed

1. Allez dans **Articles → Ajouter**
2. Rédigez votre article
3. Ajoutez une image à la une (recommandé)
4. Publiez

Les articles apparaîtront automatiquement sur la page Feed.

## ✅ Vérification finale

Vérifiez que tout fonctionne :

- ✅ Le site s'affiche correctement
- ✅ Le menu de navigation fonctionne
- ✅ Les pages sont accessibles
- ✅ Le footer affiche les réseaux sociaux
- ✅ Le formulaire de contact fonctionne
- ✅ Le design est responsive (testez sur mobile)

## 🆘 Problèmes courants

### Les images ne s'affichent pas
➡️ Vérifiez que toutes les images sont bien dans le dossier `assets/images/`

### Le formulaire de contact ne fonctionne pas
➡️ Vérifiez que Contact Form 7 est installé et activé

### Le menu ne fonctionne pas
➡️ Vérifiez les permaliens dans **Réglages → Permaliens**

### Le design est cassé
➡️ Videz le cache de votre navigateur (Ctrl+F5)

## 📞 Support

Si vous avez des questions, consultez la documentation WordPress :
https://wordpress.org/documentation/

---

**Bon succès avec votre site M.A.A.D ! 🎉**
