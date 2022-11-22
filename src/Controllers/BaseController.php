<?php

namespace ProSigned\Router;

require_once BASE_PATH . '/Config/config.php';
require_once BASE_PATH . '/Classes/Dbase.php';

$url = (isset($_GET['url']) &&  !empty($_GET['url'])) ? trim(strtolower($_GET['url'])) : 'home';

$router = new Router($url); // On instancie la classe Router.

// On crée un controller dont vont hériter tous les autres controllers.

class BaseController
{
     public $view;
     public function __construct($view)
     {
          $this->view = $view;
     }
     public function render($folder, $file, $data = [])
     {
          extract($data);
          require_once BASE_PATH . '/Views/' . $folder . '/' . $file . '.view.php';
          $controller = new $this->view();
          $controller->$file(); 
     }
}

// utlisation de la vue dans le controller
// $this->render('folder', 'file', ['data' => $data]);