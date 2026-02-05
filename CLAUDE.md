# Projet Site Bureautique de Tahiti

## Informations générales
- **Projet** : Refonte du site vitrine Bureautique de Tahiti
- **Type** : Site WordPress
- **URL originale** : https://www.bureautiquedetahiti.pf/
- **URL locale** : http://localhost/site_bdt

## Structure du repository

```
site_bdt/
├── wp-admin/          # Administration WordPress (ignoré par Git)
├── wp-includes/       # Core WordPress (ignoré par Git)
├── wp-content/
│   ├── themes/        # Thèmes personnalisés
│   ├── plugins/       # Extensions
│   └── uploads/       # Médias (ignoré par Git)
├── wp-config.php      # Configuration (ignoré par Git)
├── .gitignore
├── CLAUDE.md          # Ce fichier
└── README.md
```

## Environnement de développement
- **Serveur local** : WAMP64
- **Chemin** : `C:\wamp64\www\site_bdt`
- **PHP** : Version WAMP installée
- **MySQL** : Via phpMyAdmin WAMP
- **Base de données** : `bdt_wordpress` (à créer)

## Accès base de données
- **Host** : localhost
- **User** : root
- **Password** : (vide par défaut sur WAMP)
- **Database** : bdt_wordpress

## Conventions de développement

### Git
- Commits en français
- Messages descriptifs : `type: description`
  - `feat:` nouvelle fonctionnalité
  - `fix:` correction de bug
  - `style:` modifications CSS/design
  - `content:` ajout/modification de contenu
  - `config:` configuration

### WordPress
- Préfixe de base de données : `bdt_`
- Langue : Français
- Thème enfant recommandé pour personnalisations

## MCP Playwright
Pour explorer le site original, la configuration est dans `.mcp.json` :
```json
{
  "mcpServers": {
    "playwright": {
      "command": "cmd",
      "args": ["/c", "npx", "-y", "@playwright/mcp@latest"]
    }
  }
}
```

## Tâches principales
1. [x] Initialisation Git
2. [x] Création .gitignore
3. [x] Création CLAUDE.md
4. [x] Installation WordPress
5. [x] Configuration base de données (bdt_wordpress créée)
6. [x] Configuration MCP Playwright
7. [x] Analyse site existant (via Playwright)
8. [ ] Sélection et installation thème
9. [ ] Migration du contenu
10. [ ] Tests et ajustements

## Couleurs du site original
| Couleur | Code hex | RGB | Usage |
|---------|----------|-----|-------|
| Bleu foncé | `#000099` | rgb(0,0,153) | Texte principal, titres |
| Bleu lien | `#0033FF` | rgb(0,51,255) | Liens |
| Bleu Facebook | `#3B5998` | rgb(59,89,152) | Lien Facebook |
| Bleu clair | `#E5F0FE` | rgb(229,240,254) | Fond sections, barre menu |
| Blanc | `#FFFFFF` | rgb(255,255,255) | Fond principal |
| Noir | `#000000` | rgb(0,0,0) | Fond barre marques |

## Pages identifiées
| Page | Fichier | Contenu |
|------|---------|---------|
| Accueil | `index.php` | Slider, description entreprise, 3 blocs CTA, actualités |
| Produits | `catalogue.php` | Catalogue paginé (104 pages), fiches produit |
| Promotions | `promotions.php` | Produits en promotion (7 pages), prix barré |
| Services | `services.php` | Commercial, Livraisons, Formations, SAV |
| Contact | `contact.php` | Formulaire, coordonnées, horaires, Google Maps |
| Actualités | `actualites.php` | Événements et nouveautés |

## Catégories de produits (21)
prépayés eSIM Vini, Fax, Ecran Tactile Interactif, Photocopieur, Imprimante, Multifonction, Encaissement, Pesage, Bureautique, Multimedia, Imprimante 3D, Téléphonie, Machine à coudre, Purificateur d'air, Accessoires, Informatique, Consommables, Fabrication de tampons, Copies Service, Dépôt Vente

## Marques distribuées (8)
Aures, Brother, Casio, Creality, Exa, Ideal, Tech Five, Toshiba

## Informations entreprise
- **Slogan** : "Vous accompagne depuis 1969"
- **Adresse** : Angle rues Colette et Paul Gauguin (30 Bis), BP 210, 98713 Papeete, Tahiti
- **Tél commercial** : 40.43.00.14
- **Tél technique** : 40.42.94.01
- **Fax** : 40.43.17.08
- **Facebook** : [Bureautique de Tahiti](https://www.facebook.com/pages/Bureautique-de-Tahiti/464438023574137)
- **Horaires magasin** : Lun-Jeu 8h-12h/13h-17h, Ven 8h-12h/13h-16h, Sam 8h-12h
- **Horaires atelier** : Lun-Jeu 7h30-12h/13h-16h, Ven 7h30-12h/13h-15h

## Services proposés
1. **Service Commercial** : Accueil, conseil, vente, location, contrats de maintenance, formation
2. **Service Livraisons** : Livraison gratuite sur Tahiti, expédition îles (fret aéroport Faaa / port Motu Uta)
3. **Formations** : Formation à l'utilisation des produits
4. **Service Après-Vente** : 6 techniciens + 1 responsable atelier, pièces détachées, intervention sous 2h, 3 tournées techniques dans les archipels

## Notes
- Site vitrine pour entreprise de bureautique en Polynésie française
- Focus sur la présentation des produits/services
- Design professionnel et moderne avec version Light et Dark
- Site original en PHP custom avec tables HTML (non responsive, design ancien)
- Screenshots de référence disponibles dans `docs/screenshot/`
