# Spécifications des Images - Africa QSHE Forum

## 1. Images Prioritaires

### 1.1 Logo Principal

- **Format** : SVG (principal) + PNG (fallback)
- **Dimensions** :
  - Desktop : 150x50px
  - Mobile : 120x40px
- **Résolution** : 72 DPI
- **Style** : Moderne, professionnel
- **Contexte** : Header du site, position fixe
- **Éléments requis** :
  - Texte "Africa QSHE Forum"
  - Symbole représentant les 4 piliers (Qualité, Santé, Sécurité, Environnement)
- **Contraintes** :
  - Doit rester lisible en petit format
  - Palette de couleurs : bleu (#1e3a8a) et vert (#059669)
  - Version monochrome pour le footer

### 1.2 Bannière Principale

- **Format** : JPG
- **Dimensions** :
  - Desktop : 1920x600px
  - Tablette : 1024x400px
  - Mobile : 768x300px
- **Résolution** : 72 DPI
- **Style** : Photo professionnelle avec overlay
- **Contexte** : Hero section
- **Éléments requis** :
  - Image représentant un événement professionnel en Afrique
  - Zone de texte claire pour le thème de l'événement
- **Contraintes** :
  - Optimisée pour le texte en superposition
  - Compression optimale pour le web
  - Points focaux adaptés aux différents formats

## 2. Images des Intervenants

### 2.1 Photos de Profil

- **Format** : JPG
- **Dimensions** : 400x400px
- **Résolution** : 72 DPI
- **Style** : Portrait professionnel
- **Contexte** : Section intervenants
- **Éléments requis** :
  - Cadrage buste/tête
  - Fond neutre ou flou professionnel
- **Contraintes** :
  - Format carré
  - Éclairage professionnel
  - Tenue professionnelle

## 3. Logos des Partenaires

### 3.1 Logos Sponsors

- **Format** : PNG avec transparence
- **Dimensions** : 200x100px (zone maximale)
- **Résolution** : 72 DPI
- **Style** : Logos d'entreprise
- **Contexte** : Section partenaires
- **Contraintes** :
  - Fond transparent
  - Qualité vectorielle recommandée
  - Versions monochrome et couleur

## 4. Images Éditions Précédentes

### 4.1 Photos d'Événements

- **Format** : JPG
- **Dimensions** : 800x600px
- **Résolution** : 72 DPI
- **Style** : Photojournalistique
- **Contexte** : Galerie des éditions précédentes
- **Éléments requis** :
  - Mix de photos d'ambiance
  - Photos de conférences
  - Photos de networking
- **Contraintes** :
  - Optimisées pour le chargement rapide
  - Format paysage privilégié
  - Qualité suffisante pour zoom

### 4.2 Thumbnails

- **Format** : JPG
- **Dimensions** : 300x225px
- **Résolution** : 72 DPI
- **Style** : Version réduite des photos principales
- **Contexte** : Grille de galerie
- **Contraintes** :
  - Compression optimisée
  - Maintien des points focaux

## 5. Icônes et Éléments Graphiques

### 5.1 Icônes Thématiques

- **Format** : SVG
- **Dimensions** : 48x48px (base)
- **Style** : Ligne moderne, cohérent avec Font Awesome
- **Contexte** : Sections thématiques
- **Éléments requis** :
  - Qualité
  - Santé
  - Sécurité
  - Environnement
- **Contraintes** :
  - Style cohérent
  - Adaptable en taille
  - Monochrome

### 5.2 Éléments de Décoration

- **Format** : SVG
- **Dimensions** : Variables selon contexte
- **Style** : Motifs géométriques modernes
- **Contexte** : Arrière-plans et séparateurs
- **Contraintes** :
  - Légers et non intrusifs
  - Adaptables en taille
  - Compatibles avec la charte graphique

## Organisation des Fichiers

```
public/
  ├── images/
      ├── logo/
      │   ├── logo-primary.svg
      │   ├── logo-primary.png
      │   └── logo-mono.svg
      ├── banner/
      │   ├── hero-desktop.jpg
      │   ├── hero-tablet.jpg
      │   └── hero-mobile.jpg
      ├── speakers/
      │   └── [nom]-[prénom].jpg
      ├── partners/
      │   └── [nom-entreprise].png
      ├── gallery/
      │   ├── full/
      │   │   └── [année]-[événement]-[numéro].jpg
      │   └── thumbs/
      │       └── [année]-[événement]-[numéro]-thumb.jpg
      └── icons/
          ├── quality.svg
          ├── health.svg
          ├── safety.svg
          └── environment.svg
```

## Recommandations Techniques

### Performance et Optimisation

1. **Compression**

   - JPG : Compression progressive, qualité 80-85%
   - PNG : Compression sans perte
   - SVG : Minification du code
   - Utilisation de WebP avec fallbacks JPG/PNG

2. **Chargement**
   - Implementation du lazy loading
   - Utilisation de srcset et sizes pour images responsives
   - Preload des images critiques (logo, bannière)

### Accessibilité

1. **Textes Alternatifs**

   - Alt text descriptif et pertinent
   - ARIA labels pour les éléments décoratifs
   - Descriptions longues pour les images complexes

2. **Contraste et Lisibilité**
   - Ratio de contraste minimum 4.5:1
   - Texte sur image toujours lisible
   - Alternatives textuelles pour les informations importantes

### Responsive Design

1. **Points de Rupture**

   - Mobile : < 768px
   - Tablette : 768px - 1024px
   - Desktop : > 1024px

2. **Stratégies d'Adaptation**
   - Art direction pour la bannière
   - Densité de pixels pour les écrans haute résolution
   - Recadrage intelligent pour différents formats

## Processus de Validation

1. **Contrôle Qualité**

   - Vérification des dimensions
   - Validation des formats
   - Test de compression
   - Contrôle des métadonnées

2. **Tests**

   - Performance (PageSpeed Insights)
   - Compatibilité navigateurs
   - Responsive design
   - Accessibilité (WAVE, aXe)

3. **Maintenance**
   - Versioning des assets
   - Backup des originaux
   - Documentation des modifications
   - Processus de mise à jour
