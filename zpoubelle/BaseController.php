<?php

// namespace ProSigned\Router;

// require_once BASE_PATH . '/Config/config.php';
// require_once BASE_PATH . '/Classes/Dbase.php';

// $url = (isset($_GET['url']) &&  !empty($_GET['url'])) ? trim(strtolower($_GET['url'])) : 'home';

// $router = new Router($url);


// class BaseController
// {
//      protected $db;
//      public function __construct($db)
//      {
//           $this->db = $db;
//      }
//      public function render($view, $data = [])
//      {
//           extract($data);
//           require_once BASE_PATH . '/Views/' . $view . '/' . $view . '.view.php';
//           $controller = new $view($this->db);
//           $controller->$view(); 
//      }
// }
