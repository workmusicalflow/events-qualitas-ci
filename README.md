# Africa QSHE Forum - Site Web de Promotion

## 📋 Prérequis

- PHP 8.1+
- Composer 2.0+
- SQLite 3
- Extensions PHP requises

## 🚀 Installation

1. Clonage du projet

```bash
git clone https://github.com/workmusicalflow/events-qualitas-ci.git
cd events-qualitas-ci
```

2. Installation des dépendances

```bash
composer install
```

3. Configuration de l'environnement
4. Initialisation de la base de données

## 📦 Déploiement

### Configuration Serveur

- Hébergement : cPanel
- Utilisateur : c2356817c
- Domaine principal : events-qualitas-ci.com
- Répertoire racine : /home/c2356817c

### Procédure de Déploiement

1. Accès FTP/SSH

   - Hôte : events-qualitas-ci.com
   - Utilisateur : c2356817c
   - Répertoire de destination : /home/c2356817c/public_html

2. Configuration des Permissions
   - Fichiers : 644
   - Dossiers : 755
   - Scripts exécutables : 755

## 🔗 Liens Externes

- Badge de participation : https://events-qualitas-ci.com/formulaire.html
- Espace exposant/partenaire : https://events-qualitas-ci.com/qshe25-b2b/public/

## Structure du Site

La structure de la page doit suivre l'ordre de défilement suivant :

1. **Menu :**

   - Logo de l'évènement
   - Programme
   - Intervenants
   - Devenir exposant
   - Partenaires
   - Badge de participation
   - Éditions précédentes

2. **Bannière :**

   - Textes et images dynamiques
   - Zone d'information statique pour la Date et le Lieu de l'évènement
   - Bouton "Devenir Exposant"

3. **Présentation de l'évènement :**

   - Texte engageant sur l'Africa QSHE Forum
   - Bouton "Générer mon badge de visite"

4. **Intervenants :**

   - Section avec un échantillon de 4 intervenants, se renouvelant à chaque rechargement de page
   - Bouton "Découvrir la liste complète"

5. **Partenaires :**

   - Affichage des logos des partenaires
   - Bouton "Devenir Partenaire (Sponsor)"

6. **Plan du lieu :**

   - Carte indiquant le lieu de l'évènement
   - Rappel de la date

7. **Footer :**
   - Logo de l'organisateur
   - Coordonnées et liens vers les réseaux sociaux

## Pages Détails

- **Page Intervenants :** Cartes avec photo, nom, entreprise et poste de chaque intervenant.
- **Page Programme :** Tableau des jours, tranches horaires et activités associées.
- **Page Édition Précédente :** Galerie photo et vidéo des éditions passées.

## Exigences Techniques

- **TDD (Test-Driven Development)** : Écrire les tests avant le code, avec un plan de tests détaillé pour chaque fonctionnalité.
- **SOLID** : Respecter les principes de conception pour un code maintenable.
- **Clean Code** : Veiller à une intention par ligne, avec un nommage clair et des fonctions courtes.
- **Accessibilité** : Assurer que le site soit accessible selon les directives WCAG 2.1.

## Outils et Technologies

- **PHPUnit** pour les tests unitaires et fonctionnels
- **Composer** pour la gestion des dépendances
- **PDO** pour l'accès à la base de données SQLite
- **HTML** : Respecter la structure de base
- **Tailwind CSS** pour un design responsive et moderne
- **Alpine.js** pour l'interactivité
- **Vanilla JS** pour fonctionnalités spécifiques
- **PHP** (POO) comme langage principal
- **Architecture** : MVC avec Twig pour le templating

## État d'avancement

- [x] Configuration du projet avec Composer
- [x] Installation de PHPUnit pour les tests
- [x] Configuration de la base de données SQLite avec PDO
- [x] Installation et configuration de Twig pour le templating
- [x] Création de la structure MVC de base
- [x] Mise en place d'un routeur simple
- [x] Création d'un contrôleur et template de base
- [x] Lancement du serveur de développement

## Tâches en cours

### [Configuration du projet]

- [ ] Créer un nouveau projet avec Composer
- [ ] Configurer l'accès à la base de données SQLite avec PDO
- [ ] Installer PHPUnit pour les tests unitaires et fonctionnels

### [Conception du design]

- [ ] Concevoir le menu avec les éléments requis
- [ ] Créer la bannière dynamique
- [ ] Ajouter la zone d'information statique
- [ ] Intégrer les boutons d'action
- [ ] Développer les sections principales
- [ ] Implémenter la galerie d'intervenants
- [ ] Créer la section partenaires
- [ ] Intégrer la carte du lieu

### [Tests et Validation]

- [ ] Écrire les tests unitaires
- [ ] Valider les principes SOLID
- [ ] Vérifier l'accessibilité WCAG 2.1

### [Mise en production]

- [ ] Préparer l'environnement de production
- [ ] Effectuer les tests finaux
- [ ] Déployer sur le serveur de production
