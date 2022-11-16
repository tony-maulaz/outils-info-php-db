# Base de données
## Création de la base de données (si nécessaire)
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

# Labo 1
- Utiliser le code html exemple et créer une boucle pour générer la liste de cartes.
# Labo 2
- Créer une page `gal.php` qui affiche les images avec l'extension `.jpg` se trouvant dans le dossier `images`.
- En haut de la page, il doit y avoir un titre affiché dans un rectangle avec un fond de couleur.
- Les images sont affichées en colonne et doivent être de même largeur.
- Les images ne doivent pas être déformées.
- Les images brutes peuvent être de dimensions différentes.
- Sous l'image, vous devez afficher le nom du fichier ainsi que la dimension de l'image originale.
- Il est possible de choisir la largeur des images grâce à un paramètre dans l'url.
- Il est possible de choisir le nombre max d'images à afficher grâce à un paramètre dans l'url.
  Les autres fichiers ne seront pas affichés.
- En cliquant sur le nom d'une image, elle va s'afficher en grand format dans un nouvel onglet.
- Les informations suivantes doivent être affichées sur la page :
  - nombre d'images affichées,
  - nombre d'images totales,
  - nombre de fichiers dans le dossier images,
  - la date d'aujourd'hui.

*Bonus :*
- Il est possible en passant un paramètre dans l'url de choisir le nombre de colonnes.

**Tips :**
-  *Utiliser la fonction `getimagesize()` pour récupérer la taille d'une image.*
-  *Utiliser la fonction `glob()` ou `scandir` pour récupérer la liste des fichiers.*


# Labo 3
- [ ] Afficher la liste des titres de livres
- [ ] Afficher la liste des personnes avec les adresses
- [ ] Ajouter la possibilité de créer un livre en passant les paramètres par l'URL
