<?php

namespace ProSigned\Router;

use Route;

// On charge la classe Route.
require_once 'Route.php';

// On crée la classe Router qui va nous permettre de créer les routes de l'application.
class Router extends Route 
{
     private $url;
     private $routes = [];
     private $namedRoutes = [];

     public function __construct($url) // On crée le constructeur de la classe Router.
     {
          $this->url = $url;
     }
     
     public function addRoute($name, $path, $controller)
     {
          $this->routes[$name] = new Route($path, $controller);
     }

     public function get($path, $callable, $name = null) 
     {

          return $this->add($path, $callable, $name, 'GET'); // On retourne la méthode add.
     }

     private function add($path, $callable, $name, $method)
     {
          $route = new Route($path, $callable); // On instancie la classe Route.
          $this->routes[$method][] = $route; // On ajoute la route dans la variable $routes.
          if (is_string($callable) && $name === null) {
               $name = $callable;
          }
          if ($name) {
               $this->namedRoutes[$name] = $route;
          }
          return $route;
     }

     public function getRoutes() 
     {
          return $this->routes;
     }

     public function getNamedRoutes() 
     {
          return $this->namedRoutes;
     }

     public function getUrl() 
     {
          return $this->url;
     }

     public function __toString()  // On crée la méthode __toString 
     {
          $url = explode('?', $this->url)[0]; // On récupère l'url.
          $method = $_SERVER['REQUEST_METHOD']; // On récupère la méthode.
          if (isset($this->routes[$method])) {
               foreach ($this->routes[$method] as $route) {
                    if ($route->match($url)) {
                         return $route->call();
                    }
               }
          }
          return $route->errors404(); // On retourne la méthode errors404.
     }

     public function errors404($error404): string
     {
          header('HTTP/1.0 404 Not Found');
          return ($error404);
     }

     public function __call($method, $arguments) 
     {
          return call_user_func_array([$this->routes, $method], $arguments);
     }

     public function __get($name) 
     {
          if (isset($this->namedRoutes[$name])) {  // Si la route existe   
               return $this->namedRoutes[$name];
          }
          return null;
     }

     public function __set($name, $value) 
     {
          if (isset($this->namedRoutes[$name])) { // On vérifie si la route existe.
               $this->namedRoutes[$name] = $value;
          }
          return $this;
     }

     // On retourn sur la page précédente.
     public function back(): void
     {
          header('Location: ' . $_SERVER['HTTP_REFERER']);
     }
}


// $this->errors404('error404');
