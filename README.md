# Blog de dev en PHP POO

Ce projet est un site de blog de dev développé en PHP avec une architecture orientée objet (POO). Il permet aux utilisateurs de créer un compte, de se connecter, de publier des articles, et de les classer par catégories. Les administrateurs peuvent également ajouter des catégories pour organiser les articles.

## Fonctionnalités

- **Authentification des utilisateurs** : Inscription, connexion et déconnexion.
- **Gestion des articles** : Création, affichage, et catégorisation des articles.
- **Catégories** : Ajout de catégories pour organiser les articles.
- **CRUD** : Opérations basiques pour les articles et les utilisateurs.
- **Séparation des responsabilités** : Code organisé en classes pour une meilleure maintenabilité.

- insérer des articles de blog et des catégories
- afficher la liste des articles du plus récent au plus vieux
- ajouter une recherche par titre d'article, par contenu, par catégorie auteur et date de publication.
- faire une page qui affiche l'article de blog uniquement (qui affichera le content, car il ne sera pas affiché sur la page d'accueil)

## Structure du Projet

/
|-- index.php
|-- Ms/
| |-- Database.php
|-- includes/
| |-- header.php
| |-- footer.php
|-- Models/
| |-- Article.class.php
| |-- Database.class.php
| |-- Category.class.php
|-- Views/
| |-- home.php
| |-- article.php
| |-- publier.php
| |-- login.php
| |-- logout.php
| |-- category.php
|-- Assets/
| |-- style.css

## Fabriqué avec

- **PHP 8.2+**
- **MySQL 5.7+**
- **Serveur web** (XAMPP, Apache)
- [Bootstrap](https://getbootstrap.com) - Framework CSS (front-end)
- [VS code](https://code.visualstudio.com) - Editeur de textes

## Installation

1. Clonez ce dépôt dans votre environnement local :

   ```bash
   git clone https://github.com/bestdevelope/MY-BLOG-PHP-POO.git
   ```

2. Importez la base de données dans MySQL :
   Créez une base de données nommée blog_voyage.
   Importez le fichier SQL fourni dans la base de données.

CREATE DATABASE blog;
USE blog;
-- Importez le fichier SQL ici. (https://github.com/bestdevelope/MY-BLOG-PHP-POO)

3. Configurez la connexion à la base de données dans Models/Database.php :

4. Assurez-vous que votre serveur web pointe vers le dossier du projet.

5. Accédez à l'application via votre navigateur web.

## Utilisation

- Page d'accueil : Affiche la liste des articles.
- Connexion : Connectez-vous pour pouvoir publier des articles.
- Publication d'articles : Une fois connecté, vous pouvez publier des articles.
- Catégories : Les articles sont organisés par catégories.

### Développement

Ajouter une Catégorie
Pour ajouter une nouvelle catégorie, accédez au fichier pages/category.php. Les catégories sont récupérées à partir de la base de données, vous pouvez en ajouter via MySQL.

Ajouter un Utilisateur
Pour ajouter un utilisateur, vous pouvez soit passer par l'interface de connexion/inscription, soit ajouter un utilisateur directement via MySQL.

### Personnalisation

Styles CSS : Modifiez les styles dans le fichier css/style.css.
Templates : Les en-têtes et pieds de page sont inclus via includes/header.php et includes/footer.php.
Contribuer

Les contributions sont les bienvenues ! Si vous avez des suggestions ou trouvez des bugs, n'hésitez pas à ouvrir une issue ou à faire une pull request.

## Auteurs

- **Léa Bouillot** _alias_ [@leabouillot](https://github.com/bestdevelope)

## License

Ce projet est sous licence `exemple: WTFTPL` - voir le fichier [LICENSE.md](LICENSE.md) pour plus d'informations

### Explications

- **Fonctionnalités** : Les points clés du projet.
- **Structure du Projet** : Une vue d'ensemble des fichiers et dossiers importants.
- **Prérequis et Installation** : Guide pour installer et configurer le projet localement.
- **Utilisation** : Explication des différentes fonctionnalités et de l'interface utilisateur.
- **Développement** : Instructions pour modifier ou ajouter des fonctionnalités.
- **Contribuer** : Encourage les autres à contribuer au projet.
- **License et Auteur** : Informations sur la licence du projet et l'auteur.
