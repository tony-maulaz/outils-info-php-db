# Base de données
## Création de la base de données
`docker exec postgres-db psql -U postgres -d mydb -f /app/init-db.sql`

# Lancement de l'application
### Mode normal
`docker-compose up`

### Mode demon
`docker-compose up -d`

# Accès au site
`http://localhost:8085`

# Debug
Se connecter avec VS Code sur le container `php-db`
- Dans VS Code : `F1` puis `Remote-Containers: Attach to Running Container...`

Les extensions suivantes sont nécessaires :
- PHP Debug
- PHP Intelephense

# À faire
- [ ] Afficher la liste des titres de livres
- [ ] Afficher la liste des personnes avec les adresses
- [ ] Ajouter la possibilité de créer un livre en passant les paramètres par l'URL
