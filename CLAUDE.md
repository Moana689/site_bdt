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

## MCP Puppeteer
Pour explorer le site original :
```json
{
  "mcpServers": {
    "puppeteer": {
      "command": "npx",
      "args": ["-y", "@modelcontextprotocol/server-puppeteer"]
    }
  }
}
```

## Tâches principales
1. [x] Initialisation Git
2. [x] Création .gitignore
3. [x] Création CLAUDE.md
4. [ ] Installation WordPress
5. [ ] Configuration base de données
6. [ ] Analyse site existant (via Puppeteer)
7. [ ] Sélection et installation thème
8. [ ] Migration du contenu
9. [ ] Tests et ajustements

## Couleurs du site original
*(À compléter après analyse)*

## Pages identifiées
*(À compléter après analyse)*

## Notes
- Site vitrine pour entreprise de bureautique en Polynésie française
- Focus sur la présentation des produits/services
- Design professionnel et moderne
