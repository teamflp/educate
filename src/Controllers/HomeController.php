<?php

namespace ProSigned;

use HomeModel;

use ProSigned\Router\BaseController;
use Users;

require_once BASE_PATH . '/Config/fnc.php';



class HomeController extends BaseController
{
     public function home()
     {
          $this->render('home', 'home', [
               'title' => 'Accueil',
               'description' => 'Accueil',
               'keywords' => 'Accueil, ProSigned',
          ]);
     }
}
