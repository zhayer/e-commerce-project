# Projet CMS :  boutique en ligne dédiée à la vente de vêtements d'accessoires avec WordPress et WooCommerce 

Ce projet est une boutique en ligne dédiée à la vente de vêtements et d'accessoires pour femmes. L'objectif est de fournir une expérience d'achat agréable et intuitive.

## 📂 Contenu du dépôt

- **Code source** : Tous les fichiers WordPress nécessaires au fonctionnement du site.
- **Base de données exportée** : Fichier SQL contenant les données du site.
- **README.md** : Instructions détaillées pour installer et configurer le projet.

---

## 🚀 Instructions d'installation

### 1. Pré-requis

Avant de commencer, assurez-vous d'avoir :

- Un serveur local (par exemple : **XAMPP**, **MAMP**, ou **WAMP**).
- Une version récente de **PHP**, **MySQL**, et **phpMyAdmin**.
- L'outil **Git** pour cloner le dépôt ou récupérer les fichiers.

### 2. Installation du projet

#### Étape 1 : Cloner le dépôt GitHub

1. Ouvrez un terminal ou un éditeur de code.
2. Clonez le dépôt avec la commande suivante :

   ```bash
   git clone [URL_DU_DEPOT_GITHUB]
   ```

3. Déplacez-vous dans le répertoire cloné :

   ```bash
   cd [nom-du-repertoire]
   ```

#### Étape 2 : Configurer le serveur local

1. Copiez les fichiers du site dans le dossier `htdocs` de votre serveur local.
2. Importez la base de données :
   - Ouvrez **phpMyAdmin**.
   - Créez une base de données nommée `wordpress`.
   - Importez le fichier SQL fourni (`wordpress.sql`).

#### Étape 3 : Configurer WordPress

1. Accédez au fichier `wp-config.php` et modifiez les paramètres suivants :

   ```php
   define('DB_NAME', 'newdb');
   define('DB_USER', 'root');
   define('DB_PASSWORD', ''); // Laisser vide si vous utilisez XAMPP.
   define('DB_HOST', 'localhost');
   ```

2. Enregistrez les modifications.

#### Étape 4 : Lancer le site

1. Ouvrez votre navigateur et accédez à l'URL suivante :

   ```
   http://localhost/[nom-du-dossier]
   ```
2. Connectez-vous avec les identifiants administrateurs suivants :
   - **Nom d'utilisateur** : `Fatima Ezzahrae`
   - **Mot de passe** : `password`

---

## 🔑 Identifiants administrateur principal

- **Nom d'utilisateur** : `Fatima Ezzahrae`
- **Mot de passe** : `12345#54321Ab`

---

## 📄 Fonctionnalités principales

- Une page d'accueil interactive.
- Un catalogue produit avec filtres.
- Fiches produits détaillées.
- Gestion des commandes et profils utilisateurs.

---

## 🛠️ Développement

Ce projet a été réalisé par :

- **baiha fatima ezzahrae**
- **laaroussi taala**
- **boulalam wissal**

Année universitaire : **2024/2025**

---

Si vous avez des questions ou des problèmes lors de l'installation, n'hésitez pas à nous contacter.