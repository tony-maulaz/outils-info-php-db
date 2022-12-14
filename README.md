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

# Debug PHP
Se connecter avec VS Code sur le container `php-db`
- Dans VS Code : `F1` puis `Remote-Containers: Attach to Running Container...`

Les extensions suivantes sont nécessaires :
- PHP Debug
- PHP Intelephense

# Execution d'un fichier JS et debug
Se connecter avec VS Code sur le container `php-db`
- Dans VS Code : `F1` puis `Remote-Containers: Attach to Running Container...`

Pour exécuter un fichier, entrer dans le terminal :
`node test.js`

Pour débugger un fichier, entrer dans le terminal :
- Cliquer sur l'onglet `Debug`
- Node JS add...
- Run current file


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

# Labo JS
- Reprendre l'affichage des images comme dans la galerie PHP.
- Afficher les images en 100px de largeur pour avoir une galerie d'aperçu.
- Ne pas afficher d'information autour de l'image.
- Supprimer l'ouverture d'une image dans un nouvel onglet en cliquant dessus.

- Focus : lorsque la souris passe sur une image, afficher une bordure autour de l'image.
- Lors du clique sur une image, il faut l'afficher en grand format avec les informations.

Exemple de layout :
![Galerie](images/galerie.png)