# Roadmap - Refonte site Bureautique de Tahiti

## Objectif
Refonte du site vitrine https://www.bureautiquedetahiti.pf/ (PHP custom, tables HTML, non responsive) en site WordPress moderne, responsive et maintenable.

---

## Phase 1 - Infrastructure (TERMINÉE)

- [x] Initialisation du repo Git + .gitignore adapté WordPress
- [x] Création du CLAUDE.md (instructions projet)
- [x] Configuration MCP Playwright (exploration du site original)
- [x] Installation WordPress 6.9.1 (WAMP64, PHP 8.3.14, base `bdt_wordpress`)
- [x] WP-CLI installé (`php wp-cli.phar` depuis la racine)
- [x] Repo GitHub : https://github.com/Moana689/site_bdt (branche `main`)
- [x] Dump SQL versionné dans `docs/DB/bdt_wordpress.sql`

## Phase 2 - Analyse du site existant (TERMINÉE)

- [x] Capture de toutes les pages via Playwright (screenshots dans `docs/screenshot/`)
- [x] Extraction de la palette de couleurs (bleu foncé #000099, bleu lien #0033FF, bleu clair #E5F0FE)
- [x] Inventaire des pages : Accueil, Produits (catalogue), Promotions, Services, Contact, Actualités
- [x] Inventaire des 21 catégories de produits
- [x] Inventaire des 8 marques (Aures, Brother, Casio, Creality, Exa, Ideal, Tech Five, Toshiba)
- [x] Extraction des textes (services, coordonnées, horaires, slogan "Vous accompagne depuis 1969")
- [x] Toutes les infos consolidées dans CLAUDE.md

## Phase 3 - Mise en place WordPress (TERMINÉE)

- [x] Thème parent Astra 4.12.2 installé
- [x] Thème enfant `bdt-child` créé (`wp-content/themes/bdt-child/`)
  - `style.css` : variables CSS couleurs BDT, styles header/footer/boutons/formulaires/responsive
  - `functions.php` : chargement styles parent, footer copyright personnalisé, Google Fonts
- [x] Extensions installées : Contact Form 7, Classic Editor
- [x] Thèmes et plugins inutiles supprimés (Twenty*, Hello, Akismet)
- [x] 6 pages créées avec contenu migré du site original :
  - Accueil (ID:8) - page d'accueil statique
  - Produits (ID:9) - grille des 21 catégories
  - Promotions (ID:10) - offres + arguments de vente
  - Services (ID:11) - Commercial, Livraisons, Formations, SAV
  - Contact (ID:12) - formulaire CF7 (ID:7), coordonnées, horaires, Google Maps
  - Actualités (ID:14) - page des articles
- [x] Menu "Menu Principal" (ID:2) : Accueil > Produits > Promotions > Services > Contact
- [x] Assigné aux emplacements `primary` et `mobile_menu`

## Phase 4 - Corrections et améliorations (TERMINÉE)

### Bugs corrigés
- [x] **Liens morts** : corrigés en configurant les permaliens `/%postname%/` et le `.htaccess`
- [x] **Permaliens** : `.htaccess` avec mod_rewrite configuré, structure `/%postname%/`
- [x] **Page Actualités vide** : était assignée comme `page_for_posts`, réassignée en page statique
- [x] **Conflit MultiViews** : les screenshots dans la racine causaient des 404 (Apache MultiViews), fichiers déplacés dans `docs/screenshots-refonte/`

### Design / Template (refonte complète v2.0)
- [x] **Refonte CSS complète** (`style.css` v2.0) : design system avec variables CSS, ombres, animations hover, border-radius cohérents
- [x] **Hero section** : gradient bleu foncé avec titre, slogan, description sur la page d'accueil
- [x] **Cards CTA** : 3 cartes stylisées avec icônes, descriptions et boutons outline (Produits, Services, Contact)
- [x] **Section Marques** : fond bleu pâle avec pills cliquables pour chaque marque
- [x] **Section Titles** : titres centrés avec underline décoratif bleu
- [x] **Header** : top bar bleu foncé (téléphones + horaires) + header Astra avec navigation uppercase
- [x] **Footer** : footer 4 colonnes (À propos, Liens rapides, Contact, Horaires) + barre copyright + lien Facebook
- [x] **Footer Astra** : supprimé le "Powered by Astra" par défaut
- [x] **Page Produits** : grille responsive des 20 catégories avec effet hover
- [x] **Page Services** : grille 2x2 avec bordure latérale, icônes, horaires
- [x] **Page Promotions** : bannière gradient + cartes avantages avec icônes
- [x] **Page Contact** : grille formulaire CF7 + coordonnées/horaires + Google Maps
- [x] **Page Actualités** : cartes avec bordure latérale bleue et dates stylisées
- [x] **Responsive** : testé et fonctionnel sur mobile (375px), tablette (768px) et desktop (1280px)
  - Cards empilées en colonne sur mobile
  - Footer en colonne unique sur mobile
  - Top bar centrée, horaires masqués sur mobile
  - Menu hamburger Astra natif sur mobile/tablette

### Images (en attente)
- [ ] **Logo BDT** : récupérer/intégrer le logo de l'entreprise (l'utilisateur doit fournir le fichier)
- [ ] **Bannière header** : le site original a une bannière avec des photos de produits - créer un visuel similaire ou un slider
- [ ] **Images des pages Services** : show room, livraison, formation, SAV (4 photos sur le site original)
- [ ] **Logos des marques** : remplacer les noms textuels par les logos réels

## Phase 5 - Contenu enrichi (À FAIRE)

- [ ] Ajouter des fiches produits représentatives par catégorie (au moins 1-2 produits phares par catégorie)
- [ ] Intégrer les actualités comme vrais articles WordPress (et non contenu statique)
- [ ] Configurer le formulaire Contact Form 7 avec les bons destinataires
- [x] Ajouter le lien Facebook dans le header ou footer (ajouté dans le footer + page Actualités)

## Phase 6 - Finalisation (À FAIRE)

- [ ] SEO : titres, meta descriptions, balises Open Graph
- [ ] Performance : optimisation des images, mise en cache
- [ ] Sécurité : vérifier les bonnes pratiques WordPress
- [ ] Tests cross-browser (Chrome, Firefox, Safari, mobile)
- [ ] Mettre à jour le dump SQL final dans `docs/DB/`
- [ ] Préparer les instructions de déploiement en production

---

## Accès rapides

| Ressource | URL / Chemin |
|-----------|-------------|
| Site local | http://localhost/site_bdt/ |
| Admin WP | http://localhost/site_bdt/wp-admin/ |
| Login | `admin_bdt` / `BdT@2026!Papeete` |
| Site original | https://www.bureautiquedetahiti.pf/ |
| GitHub | https://github.com/Moana689/site_bdt |
| Thème enfant | `wp-content/themes/bdt-child/` |
| Dump SQL | `docs/DB/bdt_wordpress.sql` |
| Screenshots | `docs/screenshot/` |
| WP-CLI | `php wp-cli.phar <commande>` |

## Commandes utiles

```bash
# Lancer WP-CLI
php wp-cli.phar option list
php wp-cli.phar post list --post_type=page

# Exporter la base
"C:/wamp64/bin/mysql/mysql9.1.0/bin/mysqldump.exe" -u root bdt_wordpress > docs/DB/bdt_wordpress.sql

# Importer la base (sur une autre machine)
mysql -u root bdt_wordpress < docs/DB/bdt_wordpress.sql
```
