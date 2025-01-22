# Spécification technique du projet : Site web de promotion de l’évènement Africa QSHE Forum

## Description

Le projet consiste à réaliser un site web destiné à la promotion du forum international Africa QSHE Forum. Ce site vise à informer les visiteurs sur l'événement et à servir de plateforme pour les exposants et partenaires.

## Structure du Site

La structure de la page doit suivre l'ordre de défilement suivant :

1. **Menu :**

   - Logo de l’évènement
   - Programme
   - Intervenants
   - Devenir exposant
   - Partenaires
   - Badge de participation
   - Éditions précédentes

2. **Bannière :**

   - Textes et images dynamiques
   - Zone d’information statique pour la Date et le Lieu de l’évènement
   - Bouton “Devenir Exposant”

3. **Présentation de l’évènement :**

   - Texte engageant sur l’Africa QSHE Forum
   - Bouton “Générer mon badge de visite”

4. **Intervenants :**

   - Section avec un échantillon de 4 intervenants, se renouvelant à chaque rechargement de page
   - Bouton “Découvrir la liste complète”

5. **Partenaires :**

   - Affichage des logos des partenaires
   - Bouton “Devenir Partenaire (Sponsor)”

6. **Plan du lieu :**

   - Carte indiquant le lieu de l’évènement
   - Rappel de la date

7. **Footer :**
   - Logo de l’organisateur
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

## Outils Recommandés

- **PHPUnit** pour les tests unitaires et fonctionnels.
- **Composer** pour la gestion des dépendances.
- **PDO** pour l’accès à la base de données SQLite.

## Contraintes

- **HTML** : Respecter la structure de base.
- **Tailwind CSS** pour un design responsive et moderne.
- **Alpine.js** pour l’interactivité.
- **Vanilla JS** pour fonctionnalités spécifiques.
- **Langage** : PHP (POO).
- **Architecture** : MVC avec Twig pour le templating.

```markdown
# Liste de tâches pour le projet de site web Africa QSHE Forum

## État d'avancement

- [x] Configuration du projet avec Composer
- [x] Installation de PHPUnit pour les tests
- [x] Configuration de la base de données SQLite avec PDO
- [x] Installation et configuration de Twig pour le templating
- [x] Création de la structure MVC de base
- [x] Mise en place d'un routeur simple
- [x] Création d'un contrôleur et template de base
- [x] Lancement du serveur de développement

## [Configuration du projet]

- [ ] Créer un nouveau projet avec Composer
- [ ] Configurer l'accès à la base de données SQLite avec PDO
- [ ] Installer PHPUnit pour les tests unitaires et fonctionnels

## [Conception du design]

- [ ] Concevoir le menu avec les éléments : Logo de l’évènement, Programme, Intervenants, Devenir exposant, Partenaires, Badge de participation, Editions précédentes
- [ ] Créer la bannière dynamique (textes et images)
- [ ] Ajouter la zone d’information statique pour la Date et le Lieu
- [ ] Intégrer le bouton “Devenir Exposant”
- La page “Devenir Exposant” est identique à la page “Devenir Partenaire/sponsor” et cette page est externe au site et consultable à l’adresse suivante :

https://events-qualitas-ci.com/qshe25-b2b/public/

- [ ] Rédiger la présentation engageante de l’évènement
- [ ] Ajouter le bouton “Générer mon badge de visite”
- La page “Badge de participation” est une page externe au site et consultable à l’adresse suivantes :

https://events-qualitas-ci.com/formulaire.html

- [ ] Concevoir la section des intervenants avec un échantillon de 4 intervenants
- [ ] Implémenter le bouton “Découvrir la liste complète”
- [ ] Créer une section pour les partenaires avec logos et bouton “Devenir Partenaire (Sponsor)”
- [ ] Ajouter le Plan Map du lieu de l’évènement et rappeler la date
- [ ] Concevoir le footer avec le logo de l’organisateur et les contacts/liens sociaux

## [Développement des pages]

- [ ] Développer la page des intervenants avec cartes contenant photo, nom, entreprise et poste
- [ ] Développer la page programme avec un tableau détaillant les jours, tranches horaires et activités
- [ ] Développer la page Éditions précédentes avec galerie photo et vidéo

## [Tests et Validation]

- [ ] Écrire des tests unitaires pour chaque fonctionnalité implémentée
- [ ] S’assurer que les tests passent avant l'intégration du code
- [ ] Vérifier l'adhérence aux principes SOLID et Clean Code
- [ ] S'assurer que le site respecte les normes d'accessibilité (WCAG 2.1)

## [Mise en production]

- [ ] Préparer le déploiement en production
- [ ] Documenter le projet et les fonctionnalités
- [ ] Effectuer une validation finale avant la mise en ligne
```
