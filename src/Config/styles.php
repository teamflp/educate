<?php

function styles($styles)
{
    $style = '';
    foreach ($styles as $key => $value) {
        $style .= '<link rel="stylesheet" href="' . str_secur($value) . '">';
    }
    return $style;
}

function script($scripts)
{
    $script = '';
    foreach ($scripts as $key => $value) {
        $script .= '<script src="' . str_secur($value) . '"></script>';
    }
    return $script;
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

// La fonction convert() permet de convertir une valeur en pixel.
function convert() {
     $args = func_get_args(); // On récupère les arguments.
     $args = implode(',', $args); // On transforme le tableau en chaine de caractères.
     return $args;
}
// exemple d'utilisation de la fonction convert():
// convert(10, 'px', 20, 'px', 30, 'px');


//-----------------------------------------------------------

title('Accueil');

script([
     'assets/js/jquery-3.5.1.min.js', 
     'assets/js/bootstrap.min.js',
     'assets/js/main.js'
]);

styles([
     'assets/css/bootstrap.min.css', 
     'assets/css/style.css'
]);

classes(['btn', 'btn-primary']);

size('100');

convert('btn', 'btn-primary'); // 