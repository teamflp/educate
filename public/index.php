<?php

// require_once '../vendor/autoload.php';
require_once '../src/Classes/Autoloader.php';
require_once '../src/Config/config.php';
require_once '../src/Classes/Router.php';
/* require_once '../src/Models/HomeModel.php'; */
require_once '../src/Controllers/BaseController.php';

// ob_start(); // On ouvre la temporisation de sortie

$controllers = scandir('../src/Controllers');// On scanne le dossier Controllers.

// On affiche le contenu du dossier Controllers, Models et View dans une condition.
if (in_array(ucfirst($url) . 'Controller.php', $controllers)) {
    require_once '../src/Controllers/' . ucfirst($url) . 'Controller.php';
    require_once '../src/Models/' . ucfirst($url) . 'Model.php';
    require_once '../src/Views/' . $url . '/' . $url . '.view.php';
} else {

    echo '<h1 style="text-align:center;">'.$router->errors404('La page demandée n\'existe pas').'</h1>';

    echo '<p style="text-align:center;margin-top:20rem;"><a class="back" href="javascript:history.back()" style="padding: 1rem 5rem;border:1px solid #eee">Retour à la page précedente</a>';
}
