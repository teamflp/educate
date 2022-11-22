<?php

namespace ProSigned;

use ProSigned\Router\BaseController;

require_once BASE_PATH . '/Config/fnc.php';

class ContactController extends BaseController
{
   public function index()
   {
      $this->render('contact', 'contact', [
         'title' => 'Contact',
         'description' => 'Contactez-nous',
         'keywords' => 'Contact, ProSigned',
      ]);
      
   }
}
