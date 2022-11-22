<?php

use ProSigned\Router\Router;

require_once '../vendor/autoload.php';
require_once '../Classes/Router.php';
// On inclut le controller dans la page d'accueil.
require_once '../Controllers/HomeController.php';

// On instancie twig
// $loader = new Twig\Environment(new Twig\Loader\FilesystemLoader('../Views')); // On indique le dossier contenant les vues

// On relie twig au Controller de la page d'accueil

// On crée la variable $router qui va nous permettre de créer les routes de l'application dans le controller
// On crée une url pour la route home.
// $url = (isset($_GET['url']) &&  !empty($_GET['url'])) ? trim(strtolower($_GET['url'])) : '/';

// On crée la clé url qui va nous permettre de récupérer l'url de la page.
$url = $_GET['url'] ?? 'home';
//$router = new Router($url); // On instancie la classe Router.

// On crée les paramètres du router 
$router->get('/', 'HomeController@index');

// On instancie le routeur
//$router = new Router($loader);

// On crée une route
// $router->get('/', function () use ($loader) {
//     echo $loader->render('home/home.view.php');
// });


ob_start(); // On ouvre la temporisation de sortie

// On scanne le dossier Controllers.
$controllers = scandir('../Controllers');

// On affiche le contenu du dossier Controllers, Models et View dans une condition.
if (in_array(ucfirst($url) . 'Controller.php', $controllers)) {
    require_once '../Controllers/' . ucfirst($url) . 'Controller.php';
    require_once '../Models/' . ucfirst($url) . 'Model.php';
    require_once '../Views/' . $url . '/' . $url . '.view.php';
} else {
    echo 'La page demandée n\'existe pas.';
}
