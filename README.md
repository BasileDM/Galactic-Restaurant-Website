# 🍽 The Galactic Restaurant Website

## Le projet

Le site est une page d'un restaurant galactique fictif servant des plats du futur.

Les clients peuvent voir les menus (entrées, plats, desserts) et comme chaque personne compte, un menu entièrement robotique a été élaboré par les plus grands chefs.

Une page de réservation permet aux clients de réserver, le décompte des places se fait au fur et à mesure. Les tables étant toutes des tables pour deux personnes, chaque réservation impaire bloque automatiquement le nombre de place paire la plus proche (exemple: si une personne réserve pour 3, 4 places seront retirées des places disponibles).

Au niveau des pages administrateur, deux rôles sont définis :

* L'admin peut voir les plats, les supprimer, les modifier, les rendre disponibles ou non disponibles sur le menu.
* Il peut également voir toutes les réservations et les valider.
* Lorsqu'une réservation est validée, un mail est envoyé au client concerné. Ce mail contient un lien pour annuler sa réservation.
* Le chef cuisinier n'a accès qu'à l'onglet 'menu' avec création, modification ou suppression des plats.

## Installation

Cloner le projet:

`git clone git@github.com:BasileDM/Galactic-Restaurant-Website.git`

Copier le fichier 'config.php' à la racine du projet et renommez le nouveau fichier en 'config.local.php':

`cd Galactic-Restaurant-Website`

`cp config.php config.local.php`

Contenu du fichier de configuration:

```php
<?php
// Complétez avec vos données
define('DB_HOST', 'localhost');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PWD', '');

define('MAX_GUESTS', 60);

// Remplacer avec votre url
define('HOME_URL', '/');
define('FULL_URL', 'http://your-url-here/'); // For mails

define('DB_INITIALIZED', FALSE);
```

Pour un hosting en local avec WAMP, créer un virtual host pointant vers de dossier 'public'.

## Réalisation

Projet réalisé en groupe (Élodie, Justine et Tom) avec une structure MVC (Model View Controller) en PHP et JS.

## Améliorations

* Ajouter une limite temporelle pour le stockage des données des utilisateurs (réservations).
* Annuler la réservation en ne se basant pas que sur le mail.
* Ajouter le nom du plat dans les logs.

## Fichiers utiles

* Bien qu'une migration automatique de la base de données est en place, le script SQL se trouve dans 'src/Migrations'.
* Le schéma de base de données se trouve dans le dossier 'ressources.'

## Versions

* Server: MySQL 8.2.0
* PHP: 8.3.6
* Bootstrap: 5.3.3
