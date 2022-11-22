<?php 

// Fonction de debug.
function debug($var, $mode = 1) {
    echo '<div style="background: orange; padding: 5px; float: left; clear: both; width: 100%;">';
    $trace = debug_backtrace();
    $trace = array_shift($trace);
    echo 'Debug demandé dans le fichier ' . $trace['file'] . ' à la ligne ' . $trace['line'];
     echo '</div>';
     if ($mode === 1) {
          echo '<pre>';
          print_r($var);
          echo '</pre>';
     } else {
          echo '<pre>';
          var_dump($var);
          echo '</pre>';
     }
}

// On crée la fonction str_secur qui va nous permettre de sécuriser les données.
function str_secur($string) { 
     return trim(htmlspecialchars($string)); 
}

// On génère un lien de type <a class="" href=""></a> à partir d'un nom de route et d'un tableau de paramètres.
function getUrl(string $url, string $name, array $params = [], $target = null, $icon = null) {
     $url = str_secur($url);
     $name = str_secur($name);
     $icon = str_secur($icon);

     if(!empty($params)) {
          $params = implode(',', $params); // On transforme le tableau en chaine de caractères.
     } 
     elseif ($target === null) {
          return '<a href="' . $url . '">' . $name . '</a>';
     } 
     elseif ($icon === null) {
          return '<a href="' . $url . '" target="' . $target . '">' . $name . '</a>';
     } 
     
     else {
          $params = ''; // On initialise la variable $class à une chaine de caractères vide.
     }

     return '<a href="'.$url.'" target="'.$target.'" class="'.$params.'"><i class="' . $icon . '"></i> '.$name.'</a>'; // On retourne le lien.
}

function importCss($css)
{
     $css = explode(',', $css);
     foreach ($css as $value) {
          echo '<link rel="stylesheet" href="' . BASE_PATH . '/components/css/' . str_secur($value) . '.css">';
     }

}

function importScript($js)
{
    $js = explode(',', $js);
    foreach ($js as $value) {
        echo'<script src="' . str_secur($value) . '"></script>';
    }
}

function title($title)
{
    return '<title>' . str_secur($title ). '</title>';
}

function classes($class = [])
{
    $classes = '';
    foreach ($class as $key => $value) {
        $classes .= ' ' . str_secur($value);
    }
    return $classes; 
}

function size($size) {
     $size = str_secur($size);
     switch ($size) {
          case 'px': return $size.'px';
          case 'em': return $size.'em';
          case 'rem': return $size.'rem';
          case 'vw': return $size.'vw';
          case 'vh': return $size.'vh';
          case 'vmin': return $size.'vmin';
          case 'vmax': return $size.'vmax';
          case 'cm': return $size.'cm';
          case 'mm': return $size.'mm';
          case 'in': return $size.'in';
          case 'pt': return $size.'pt';
          case 'pc': return $size.'pc';
          case 'ex': return $size.'ex';
          case 'ch': return $size.'ch';
          case '%': return $size.'px';
     }
}

function string($string) {
     return str_secur($string);
}

// La fonction convert() permet de convertir une valeur en pixel.
function convert() {
     $args = func_get_args(); // On récupère les arguments.
     $args = implode(',', $args); // On transforme le tableau en chaine de caractères.
     return $args;
}

// getUrl('#', 'Accueil', ['class'=> 'btn-primary'], '_blank', 'home');

// Exemple d'utilisation de le fonction getUrl():
// getUrl('home','home',['class' => 'btn btn-primary'], '_blank');