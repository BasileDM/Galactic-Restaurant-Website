# Galactic-Restaurant

🍽 The Galactic Restaurant website

## Le projet

Le site est une page d'un restaurant galactique.

Les clients peuvent voir les menus (entrées, plats, desserts) et comme chaque personne compte un menu entièrement robotique a été élaboré par les plus grands chefs.

Une page de réservation permet aux clients de réserver, le décompte des places se fait au fur et à mesure. Chaque réservation impaire bloque automatiquement le nombre de place paire la plus proche (exemple: si une personne réserve pour 3, 4 places seront retirées des places disponibles).

Au niveau des pages administrateur :
Deux rôles sont définis :
L'admin peut voir les plats, les supprimer, les modifier, les rendre disponibles ou non disponibles. Il peut également voir toutes les réservations et les valider.
Lorsqu'une réservation est validée, un mail est envoyé au client concerné. Ce mail contient un lien pour annuler sa réservation.

Le chef cuisinier n'a accès qu'à l'onglet 'menu' avec création, modification ou suppression des plats.

# Installation

Clôner le projet
Copier le fichier 'config.php' à la racine du projet et renommez-le 'config.local.php' :

```php
<?php
// Completez avec vos données
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

Créer un localhost sur la branche public

# Réalisation

Projet réalisé en groupe (Tom, Justine et Elodie) avec une structure MVC (Model View Controller) en PHP et JS.

# Améliorations
