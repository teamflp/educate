<?php

use ProSigned\Router\Router;

require_once '../Views/home/home.view.php';
require_once '../vendor/autoload.php';

// On affiche la page d'accueil avec twig.
// echo $this->twig->render('home/home.view.php', [
//      'title' => 'Home',
//      'description' => 'Le site ProSigned est en construction',
//      'url' => 'home'
// ]);

// $titre = 'Bienvenue sur ProSigned';

// On affiche la variable dans l'accueil

// On inclut le controller dans la page d'accueil.
// On affiche la page d'accueil avec la méthode render de la classe Router.

// On récupère la clé url qui va nous permettre de récupérer l'url de la page.
$url = $_GET['url'] ?? 'home'; // On récupère l'url de la page.
//$router = new Router($url); // On instancie la classe Router.

//$router->get('/', 'HomeController@index', compact('titre')); // On crée une route pour la page d'accueil.

// On instancie le routeur

// On crée une route

// $loader = new Twig\Environment(new Twig\Loader\FilesystemLoader('../Views')); // On indique le dossier contenant les vues
// $twig = new Twig\Environment($loader); // On instancie le dossier

// On crée la variable $router qui va nous permettre de créer les routes de l'application dans le controller
// On crée une url pour la route home.

// $router->get('/', function () use ($loader) {
//     echo $loader->render('View/home/home.view.php');
// });
