<?php

class LoaderFiles {
     private $path;
     public function __construct($path) {
          $this->path = $path;
     }
     public function loadFiles($files) {
          
          foreach ($files as $file) {
               $this->addFiles($file); // On charge le fichier
          }
     }
     public function addFiles($files) {
          $files = scandir($this->path); // On récupère les fichiers du dossier
          $files = $this->path . $files . '.php'; // On ajoute l'extension .php
          if (file_exists($files)) {
               require_once $files; // On charge le fichier
          }
     }
}


// Utilisation de la classe LoaderFiles()
// $files = new LoaderFiles('../_partials/');
// $files->loadFiles(['header']); // On charge les fichiers footer et scripts

// $h = new LoaderFiles('../src/Views/_partials/');
// $h->loadFiles(['header']); // On charge les fichiers footer et scripts

/* $auto = new LoaderFiles('../src/Views/_partials/');
$auto->loadFiles(['header', 'footer', 'navbar', 'sidebar']); // On charge les fichiers header, footer, navbar et sidebar
 */

