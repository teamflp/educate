<?php

class Autoloader {
     public static function register() {
          spl_autoload_register(array(__CLASS__, 'autoload')); // On enregistre la méthode autoload() en autoload
     }
     public static function autoload($class) {
          include_once '../src/Classes/' . $class . '.php';
          $class = new $class();
          $class->autoload(); // On appelle la méthode autoload() de la classe.

     }
}

//Autoloader::register(); // On enregistre l'autoloader


