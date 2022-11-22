<?php 
// Configuration de la base de données.

define('DB_HOST', 'localhost');
define('DB_USER', 'paterne');
define('DB_PASS', 'Mardochee2000');
define('DB_NAME', 'prosigned');

// Configuration de l'application.

define('SITE_NAME', 'GNPINFORMATIQUE');

define('BASE_PATH', dirname(dirname(__FILE__)));

// On déclare le titre pour chaque tel que la page d'accueil, la page de connexion, etc.

define('HOME_TITLE', 'Accueil', true);
define('ABOUT_TITLE', 'A propos de nous');
define('LOGIN_TITLE', 'Connexion');
define('CONTACT_TITLE', 'Contact');


// function getPageTitle($title) {
//      if(isset($_GET['title'])) {
//           $title = $_GET['title'];
//           if(strlen($title) > 100) {
//                $title = substr($title, 0, 100); // On limite le titre à 100 caractères.
//           } else {
//                $title = $title; // Sinon on affiche le titre.
//           }
//      }
// }



