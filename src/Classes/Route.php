<?php 

class Route
{
     private $route;
     private $handler;

     public function __construct($route, $handler)
     {
          $this->route = trim($route, '/'); // On supprime les slashs en début et fin de chaîne.
          $this->handler = $handler;
     }
     public function getRoute() {
          return $this->route;
     }
     public function getHandler() {
          return $this->handler;
     }
     public function __toString() {
          return $this->route;
     }
     
}