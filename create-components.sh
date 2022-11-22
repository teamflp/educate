#!/bin/sh

# Création d'un composant
# Usage: create-component.sh <component-name>
# Description: Création d'un composant
# Arguments: component-name
# Options: none
# Returns: none
# Auteur: Paterne G. G.
# sudo ln -s ./create-components.sh /usr/local/bin/create-component
# Usage: create-component <component-name>

vertclair='\e[1;32m'
this='$this'

read -p "[Nom du composant] : " component

path_controller="./src/Controllers/$(echo $component | sed 's/\(.\)/\u\1/')Controller.php"
path_model="./src/Models/$(echo $component | sed 's/\(.\)/\u\1/')Model.php"
path_view="./src/Views/$(echo $component | sed 's/\(.\)/\l\1/')/$(echo $component | sed 's/\(.\)/\l\1/').view.php"
path_css=".//public/components/css/$(echo $component | sed 's/\(.\)/\l\1/').css"

if [ -f $path_controller ] || [ -f $path_model ] || [ -f $path_view ] || [ -f $path_css ]; then
     echo "Le composant $component existe déjà"
     exit 1
else  
     read -p "Continuer ? [y/n] : " answer

     if [ "$answer" = "y" ]; then
          sudo touch ./src/Controllers/$(echo $component | sed 's/\(.\)/\u\1/')Controller.php
          sudo touch ./src/Models/$(echo $component | sed 's/\(.\)/\u\1/')Model.php
          sudo touch ./public/components/css/$(echo $component | sed 's/\(.\)/\l\1/').css
          sudo touch ./src/Views/$(echo $component | sed 's/\(.\)/\l\1/').view.php && 
          sudo mkdir -p ./src/Views/$(echo $component | sed 's/\(.\)/\l\1/') &&
          sudo mv ./src/Views/$(echo $component | sed 's/\(.\)/\l\1/').view.php ./src/Views/$(echo $component | sed 's/\(.\)/\l\1/')/$(echo $component | sed 's/\(.\)/\l\1/').view.php
          sudo chmod 777 ./src/Controllers/$(echo $component | sed 's/\(.\)/\u\1/')Controller.php
          sudo chmod 777 ./src/Models/$(echo $component | sed 's/\(.\)/\u\1/')Model.php
          sudo chmod 777 ./public/components/css/$(echo $component | sed 's/\(.\)/\l\1/').css
          sudo chmod -R 777 ./src/Views/$component && 
          
          sleep 3 && echo "\n${vertclair}Le composant $component a été créé avec succès !"

          echo
          # On affiche le composant dans les dossiers Controllers, Models, View/ et public/components/css
          echo "${vertclair}Controllers : $(echo $component | sed 's/\(.\)/\u\1/')Controller.php"
          echo "${vertclair}Models : $(echo $component | sed 's/\(.\)/\u\1/')Model.php"
          echo "${vertclair}Views : $(echo $component | sed 's/\(.\)/\l\1/')/$(echo $component | sed 's/\(.\)/\l\1/').view.php"
          echo "${vertclair}css : $(echo $component | sed 's/\(.\)/\l\1/').css"
          
          echo "--------------------------------------------"
          echo "<?php \n\nuse ProSigned\Router\BaseController;\n\nclass $(echo $component | sed 's/\(.\)/\u\1/')Controller extends BaseController \n{\n\tpublic function $component() {\n\t\t$this->render('$component', '$component', ['Title ' => '$(echo $component | sed 's/\(.\)/\u\1/')Controller']);\n\t}\n}" >> ./src/Controllers/$(echo $component | sed 's/\(.\)/\u\1/')Controller.php

          echo "<?php \nclass $(echo $component | sed 's/\(.\)/\u\1/') { \n}" >> ./src/Models/$(echo $component | sed 's/\(.\)/\u\1/')Model.php

          echo "h1 { text-align: center; }" >> ./public/components/css/$(echo $component | sed 's/\(.\)/\l\1/').css
          # On ajoute le composant à la fin du fichier app.css en utilisant @import "./css/$component.css";
          echo
          echo "@import \"./css/$(echo $component | sed 's/\(.\)/\l\1/').css\";\n" >> ./public/components/app.css

echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
     <title>$(echo ${component} | sed 's/\(.\)/\u\1/')</title>
     <meta charset=\"utf-8\">
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>
<body>
     <h1> Hello $(echo $component | sed 's/\(.\)/\u\1/')Controller</h1>
</body>
</html>" >> ./src/Views/$(echo $component | sed 's/\(.\)/\l\1/')/$(echo $component | sed 's/\(.\)/\l\1/').view.php
     else
          exit
     fi
fi
